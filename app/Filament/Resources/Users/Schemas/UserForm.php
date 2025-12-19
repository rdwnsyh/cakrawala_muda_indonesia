<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi User')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan nama lengkap'),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->placeholder('user@example.com'),

                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn(string $context): bool => $context === 'create')
                            ->dehydrateStateUsing(fn($state) => filled($state) ? Hash::make($state) : null)
                            ->dehydrated(fn($state) => filled($state))
                            ->maxLength(255)
                            ->placeholder('Minimal 8 karakter')
                            ->helperText('Kosongkan jika tidak ingin mengubah password'),

                        TextInput::make('password_confirmation')
                            ->label('Konfirmasi Password')
                            ->password()
                            ->required(fn($get) => filled($get('password')))
                            ->same('password')
                            ->dehydrated(false)
                            ->maxLength(255)
                            ->placeholder('Ulangi password'),

                        Checkbox::make('is_verified')
                            ->label('Verifikasi Email Otomatis')
                            ->helperText('Centang untuk langsung memverifikasi email user')
                            ->default(true)
                            ->dehydrated(false),
                    ])
                    ->columns(1),
            ]);
    }
}
