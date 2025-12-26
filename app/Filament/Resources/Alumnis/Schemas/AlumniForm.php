<?php

namespace App\Filament\Resources\Alumnis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AlumniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Informasi Alumni')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Alumni')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan nama alumni'),

                        Select::make('program_id')
                            ->label('Alumni Program')
                            ->relationship('program', 'nama_program')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->placeholder('Pilih program alumni'),

                        Textarea::make('testimoni')
                            ->label('Testimoni')
                            ->placeholder('Masukkan testimoni alumni...')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Foto Alumni')
                    ->schema([
                        FileUpload::make('foto')
                            ->label('Foto Alumni')
                            ->image()
                            ->disk('public')
                            ->directory('alumni')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->required()
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Upload foto alumni (ukuran maksimal: 2MB)')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
