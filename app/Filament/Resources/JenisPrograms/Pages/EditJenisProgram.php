<?php

namespace App\Filament\Resources\JenisPrograms\Pages;

use App\Filament\Resources\JenisPrograms\JenisProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisProgram extends EditRecord
{
    protected static string $resource = JenisProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
