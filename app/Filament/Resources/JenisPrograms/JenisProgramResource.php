<?php

namespace App\Filament\Resources\JenisPrograms;

use App\Filament\Resources\JenisPrograms\Pages\CreateJenisProgram;
use App\Filament\Resources\JenisPrograms\Pages\EditJenisProgram;
use App\Filament\Resources\JenisPrograms\Pages\ListJenisPrograms;
use App\Models\JenisProgram;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;

class JenisProgramResource extends Resource
{
    protected static ?string $model = JenisProgram::class;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-tag';
    }

    public static function getNavigationLabel(): string
    {
        return 'Kelola Jenis Program';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Konten';
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Informasi Jenis Program')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Jenis Program')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Jelajah Cakrawala Muda, Cakrawala Volunteering'),

                        FileUpload::make('poster')
                            ->label('Poster')
                            ->image()
                            ->disk('public')
                            ->directory('jenis-programs')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Gambar untuk mewakili jenis program (ukuran rekomendasi: 400x300px)')
                            ->columnSpanFull(),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'aktif' => 'Aktif',
                                'selesai' => 'Selesai',
                            ])
                            ->default('aktif')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Jenis Program')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('poster')
                    ->label('Poster')
                    ->disk('public')
                    ->square()
                    ->size(60),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'aktif',
                        'danger' => 'selesai',
                    ])
                    ->icons([
                        'heroicon-o-check-circle' => 'aktif',
                        'heroicon-o-x-circle' => 'selesai',
                    ]),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'selesai' => 'Selesai',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJenisPrograms::route('/'),
            'create' => CreateJenisProgram::route('/create'),
            'edit' => EditJenisProgram::route('/{record}/edit'),
        ];
    }
}
