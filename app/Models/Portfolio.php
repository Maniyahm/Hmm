<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'category',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function imageUrl(): string
    {
        $image = $this->image;

        if (! $image) {
            return asset('images/logo.png');
        }

        if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return $image;
        }

        // public/uploads/... (Filament uploads disk)
        if (str_starts_with($image, 'portfolios/') || str_starts_with($image, 'branding/')) {
            if (file_exists(public_path('uploads/' . $image))) {
                return asset('uploads/' . $image);
            }
        }

        // Already a public path like images/job.png
        if (str_starts_with($image, 'images/') || str_starts_with($image, 'uploads/')) {
            return asset($image);
        }

        // Classic storage disk path
        if (Storage::disk('public')->exists($image)) {
            return asset('storage/' . $image);
        }

        return asset($image);
    }
}
