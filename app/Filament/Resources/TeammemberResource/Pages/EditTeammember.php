<?php

namespace App\Filament\Resources\TeammemberResource\Pages;

use App\Filament\Resources\TeammemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeammember extends EditRecord
{
    protected static string $resource = TeammemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
