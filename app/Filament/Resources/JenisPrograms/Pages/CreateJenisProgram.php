<?php

namespace App\Filament\Resources\JenisPrograms\Pages;

use App\Filament\Resources\JenisPrograms\JenisProgramResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJenisProgram extends CreateRecord
{
    protected static string $resource = JenisProgramResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
