<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Models\Berita;
use App\Models\User;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;


class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            // Menggunakan Container dan Grid untuk merapikan form
            Forms\Components\Grid::make(2)  // Grid dengan 2 kolom
                ->schema([
                    TextInput::make('judul')
                        ->required()
                        ->label('Judul Berita')
                        ->columnSpan(1),  // Mengatur judul di kolom pertama
                    DateTimePicker::make('tanggal_berita')
                        ->required()
                        ->label('Tanggal dan Waktu Berita')
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
                ->label('Konten Berita')
                ->columnSpan(2)  // Membuat RichEditor mengisi seluruh lebar form
                ->placeholder('Tulis konten berita di sini...'),

            // Upload gambar (dibawah status dan penulis berita)
            FileUpload::make('gambar')
                ->image()
                ->directory('berita-images')
                ->label('Gambar Berita')
                ->columnSpan(2)
                ->nullable(),

            // Grid untuk status dan penulis berita
            Forms\Components\Grid::make(2)  // Grid dengan 2 kolom
                ->schema([
                    Select::make('status')
                        ->label('Status Berita')
                        ->options([
                            'terbit' => 'Terbit',
                            'draft' => 'Draft',
                        ])
                        ->default('terbit')
                        ->required()
                        ->columnSpan(1),  // Mengatur status di kolom pertama
                    Select::make('user_id')
                        ->label('Penulis Berita')
                        ->options(User::all()->pluck('name', 'id'))
                        ->default(fn () => auth()->id())
                        ->searchable()
                        ->required()
                        ->columnSpan(1),  // Mengatur penulis di kolom kedua
                ])
                ->columnSpan(2), // Membuat grid span dua kolom untuk status dan penulis berita
        ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->searchable(),
                TextColumn::make('tanggal_berita')->dateTime(),
                TextColumn::make('status')->label('Status')->sortable(),
                TextColumn::make('user.name')->label('Penulis'),
                ImageColumn::make('gambar')->disk('public')->size(50),
            ])
            ->actions([
                ViewAction::make()
                    ->url(fn(Berita $record) => route('berita.show', ['slug' => $record->slug]))
                    ->visible(fn(Berita $record) => $record->status === 'terbit'),

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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
