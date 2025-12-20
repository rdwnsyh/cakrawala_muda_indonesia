<?php

namespace App\Filament\Resources\Programs;

use App\Filament\Resources\Programs\Pages\CreateProgram;
use App\Filament\Resources\Programs\Pages\EditProgram;
use App\Filament\Resources\Programs\Pages\ListPrograms;
use App\Models\Program;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section; // <-- Ini yang penting untuk v4
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Illuminate\Support\Str;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-rectangle-stack';
    }

    public static function getNavigationLabel(): string
    {
        return 'Kelola Program';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Konten';
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Informasi Program')
                    ->schema([
                        Select::make('jenis_program_id')
                            ->label('Jenis Program')
                            ->relationship('jenisProgram', 'nama')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('nama')
                                    ->label('Nama Jenis Program')
                                    ->required()
                                    ->maxLength(255),
                                FileUpload::make('poster')
                                    ->label('Poster')
                                    ->image()
                                    ->disk('public')
                                    ->directory('jenis-programs')
                                    ->visibility('public')
                                    ->maxSize(2048)
                                    ->imageEditor(false)
                                    ->downloadable()
                                    ->openable(),
                                Select::make('status')
                                    ->label('Status')
                                    ->options([
                                        'aktif' => 'Aktif',
                                        'selesai' => 'Selesai',
                                    ])
                                    ->default('aktif')
                                    ->required(),
                            ])
                            ->placeholder('Pilih Jenis Program'),

                        TextInput::make('nama_program')
                            ->label('Nama Program')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($set, $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->disabled()
                            ->dehydrated(),

                        TextInput::make('lokasi')
                            ->label('Lokasi')
                            ->placeholder('Contoh: Dieng, Jawa Tengah')
                            ->maxLength(255),

                        DatePicker::make('tanggal_mulai')
                            ->label('Tanggal Mulai')
                            ->required()
                            ->displayFormat('d/m/Y')
                            ->native(false),

                        DatePicker::make('tanggal_selesai')
                            ->label('Tanggal Selesai')
                            ->required()
                            ->displayFormat('d/m/Y')
                            ->native(false)
                            ->afterOrEqual('tanggal_mulai'),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'aktif' => 'Aktif',
                                'segera' => 'Segera',
                                'tutup' => 'Tutup',
                            ])
                            ->required()
                            ->default('aktif')
                            ->native(false),
                    ])->columns(2),

                Section::make('Keterangan')
                    ->schema([
                        RichEditor::make('keterangan')
                            ->label('Keterangan Program')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'h2',
                                'h3',
                                'link',
                                'blockquote',
                            ]),
                    ]),

                Section::make('Media Program')
                    ->schema([
                        FileUpload::make('poster')
                            ->label('Poster Program')
                            ->image()
                            ->disk('public')
                            ->directory('programs')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->required()
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Poster spesifik untuk program ini (ukuran rekomendasi: 800x600px)')
                            ->columnSpanFull(),

                        FileUpload::make('galeri_1')
                            ->label('Galeri Foto 1')
                            ->image()
                            ->disk('public')
                            ->directory('programs/galeri')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Foto galeri program (opsional)'),

                        FileUpload::make('galeri_2')
                            ->label('Galeri Foto 2')
                            ->image()
                            ->disk('public')
                            ->directory('programs/galeri')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Foto galeri program (opsional)'),

                        FileUpload::make('galeri_3')
                            ->label('Galeri Foto 3')
                            ->image()
                            ->disk('public')
                            ->directory('programs/galeri')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->imageEditor(false)
                            ->downloadable()
                            ->openable()
                            ->helperText('Foto galeri program (opsional)'),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('poster')
                    ->label('Poster Program')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama_program')
                    ->label('Nama Program')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),
                Tables\Columns\TextColumn::make('jenisProgram.nama')
                    ->label('Jenis Program')
                    ->badge()
                    ->color('primary')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->description(fn($record) => $record->tanggal_selesai ? 's/d ' . $record->tanggal_selesai->format('d M Y') : '')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'aktif' => 'success',
                        'segera' => 'warning',
                        'tutup' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn(string $state): string => ucfirst($state))
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('jenis_program_id')
                    ->label('Jenis Program')
                    ->relationship('jenisProgram', 'nama')
                    ->searchable()
                    ->preload(),
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'aktif' => 'Aktif',
                        'segera' => 'Segera',
                        'tutup' => 'Tutup',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])
            ->defaultSort('tanggal_mulai', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPrograms::route('/'),
            'create' => CreateProgram::route('/create'),
            'edit' => EditProgram::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        $count = static::getModel()::count();

        return match (true) {
            $count > 20 => 'danger',
            $count > 10 => 'warning',
            default => 'primary',
        };
    }
}