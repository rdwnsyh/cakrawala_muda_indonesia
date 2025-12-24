<?php

namespace App\Filament\Resources\Penguruses\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PengurusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pengurus')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Ahmad Hidayat'),

                        TextInput::make('jabatan')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Ketua Umum, Kepala Divisi Acara, Staff')
                            ->helperText('Posisi atau jabatan dalam kepengurusan'),

                        TextInput::make('divisi')
                            ->label('Divisi')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: BPH, Kreatif, Event')
                            ->helperText('Divisi atau departemen pengurus'),

                        TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0)
                            ->helperText('Angka lebih kecil akan tampil lebih dulu (0 = paling atas)'),

                        FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->image()
                            ->required()
                            ->directory('pengurus')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->helperText('Upload foto profil dengan rasio 1:1 (persegi)'),
                    ])
                    ->columns(2),
            ]);
    }
}
