<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageSiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static string $view = 'filament.pages.manage-site-settings';

    protected static ?string $navigationLabel = 'Logo & Branding';

    protected static ?string $title = 'Logo & Branding';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 99;

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SiteSetting::current();
        $logo = $settings->logo;

        if ($logo && str_starts_with($logo, 'uploads/')) {
            $logo = substr($logo, strlen('uploads/'));
        }

        $this->form->fill([
            'logo' => $logo,
            'site_name' => $settings->site_name,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Website Branding')
                    ->description('Logo shows in header, footer and browser tab. Vercel tip: after upload, commit public/uploads then redeploy.')
                    ->schema([
                        Forms\Components\TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->disk('uploads')
                            ->directory('branding')
                            ->imageEditor()
                            ->helperText('Or keep default: images/logo.png'),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        $logo = $data['logo'] ?? null;

        if ($logo && ! str_starts_with($logo, 'http') && ! str_starts_with($logo, 'images/') && ! str_starts_with($logo, 'uploads/')) {
            $logo = 'uploads/' . ltrim($logo, '/');
        }

        SiteSetting::current()->update([
            'logo' => $logo ?: 'images/logo.png',
            'site_name' => $data['site_name'] ?? 'Hm² Infotech',
        ]);

        Notification::make()
            ->title('Branding saved')
            ->success()
            ->send();
    }
}
