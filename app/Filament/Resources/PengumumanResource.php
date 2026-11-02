<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Models\Pengumuman;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\RichEditor;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationLabel = 'Pengumuman';

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Grid::make(2)  // Grid dengan 2 kolom
                ->schema([
                    TextInput::make('judul')
                        ->required()
                        ->label('Judul Pengumuman')
                        ->columnSpan(1),  // Mengatur judul di kolom pertama
                    DateTimePicker::make('tanggal_pengumuman')
                        ->required()
                        ->label('Tanggal dan Waktu Pengumuman')
                        ->columnSpan(1),  // Mengatur tanggal di kolom kedua
                ])
                ->columnSpan(2), // Membuat grid span dua kolom untuk judul dan tanggal
            // Konten berita (di bawah judul dan tanggal)
            RichEditor::make('konten')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                ->required()
                ->label('Konten Pengumuman')
                ->columnSpan(2)  // Membuat RichEditor mengisi seluruh lebar form
                ->placeholder('Tulis konten pengumuman di sini...'),
            Select::make('status')
                ->label('Status Pengumuman')
                ->options([
                    'aktif' => 'Aktif',
                    'non-aktif' => 'Non-Aktif'
                ])
                ->default('aktif')
                ->required(),
            FileUpload::make('gambar')
                ->image()
                ->directory('pengumuman-images')
                ->label('Gambar Pengumuman')
                ->nullable(),
            FileUpload::make('file_pdf')
                ->acceptedFileTypes(['application/pdf'])
                ->directory('pengumuman-files')
                ->label('File PDF')
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        // return $table
            // ->columns([
            //     TextColumn::make('judul')->searchable(),
            //     TextColumn::make('tanggal_pengumuman')->dateTime(),
            //     ImageColumn::make('gambar')->disk('public')->size(50),
            //     TextColumn::make('status')->label('Status')->sortable(),
            // ]);

        return $table
            ->columns([
                TextColumn::make('judul')->searchable(),
                TextColumn::make('tanggal_pengumuman')->dateTime(),
                ImageColumn::make('gambar')->disk('public')->size(50),
                TextColumn::make('status')->label('Status')->sortable()
            ])
            ->actions([
                ViewAction::make()
                    ->url(fn(Pengumuman $record) => route('pengumuman.show', ['slug' => $record->slug]))
                    ->visible(fn(Pengumuman $record) => $record->status === 'aktif'),

                EditAction::make(),

                DeleteAction::make(),
            ])
            ->filters([
                // Filter jika diperlukan
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengumuman::route('/'),
            'create' => Pages\CreatePengumuman::route('/create'),
            'edit' => Pages\EditPengumuman::route('/{record}/edit'),
        ];
    }
}
