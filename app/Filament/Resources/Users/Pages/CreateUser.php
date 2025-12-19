<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Set email_verified_at jika checkbox is_verified dicentang
        if (isset($data['is_verified']) && $data['is_verified']) {
            $data['email_verified_at'] = now();
        }

        // Hapus is_verified karena bukan field database
        unset($data['is_verified']);

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
