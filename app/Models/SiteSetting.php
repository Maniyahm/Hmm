<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    protected $fillable = [
        'logo',
        'site_name',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Hm² Infotech',
                'logo' => 'images/logo.png',
            ]
        );
    }

    public function logoUrl(): string
    {
        $logo = $this->logo;

        if (! $logo) {
            return asset('images/logo.png');
        }

        if (str_starts_with($logo, 'http://') || str_starts_with($logo, 'https://')) {
            return $logo;
        }

        if (str_starts_with($logo, 'branding/')) {
            if (file_exists(public_path('uploads/' . $logo))) {
                return asset('uploads/' . $logo);
            }
        }

        if (str_starts_with($logo, 'images/') || str_starts_with($logo, 'uploads/')) {
            return asset($logo);
        }

        if (Storage::disk('public')->exists($logo)) {
            return asset('storage/' . $logo);
        }

        return asset($logo);
    }
}
