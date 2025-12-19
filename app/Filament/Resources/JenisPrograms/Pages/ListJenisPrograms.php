<?php

namespace App\Filament\Resources\JenisPrograms\Pages;

use App\Filament\Resources\JenisPrograms\JenisProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisPrograms extends ListRecords
{
    protected static string $resource = JenisProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
