<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// Tambahkan import komponen ini agar tidak error
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    // Ganti label navigasi agar lebih rapi (Opsional)
    protected static ?string $navigationLabel = 'Paket Internet';
    protected static ?string $pluralModelLabel = 'Daftar Paket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Bagian 1: Informasi Dasar
                Section::make('Informasi Paket')
                    ->description('Masukkan detail utama paket internet.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Paket')
                            ->placeholder('Contoh: Gamer Pro')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('speed')
                            ->label('Kecepatan')
                            ->placeholder('Contoh: 150 Mbps')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('price')
                            ->label('Harga Bulanan')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),
                    ])->columns(2), // Tampilan 2 kolom

                // Bagian 2: Fitur & Status
                Section::make('Fitur & Promo')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Daftar Fitur')
                            ->placeholder('Ketik fitur lalu tekan Enter')
                            ->separator(',') // Bisa pakai koma untuk memisahkan
                            ->required()
                            ->columnSpanFull(), // Agar lebar memenuhi layar
                        
                        Toggle::make('is_featured')
                            ->label('Jadikan Paket Best Seller? (Warna Emas)')
                            ->onColor('warning')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Paket')
                    ->sortable()
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('speed')
                    ->label('Kecepatan')
                    ->badge() // Agar tampilannya seperti label kecil
                    ->color('info'),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR') // Format otomatis ke Rupiah
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->label('Best Seller')
                    ->boolean() // Menampilkan ikon Ceklis/Silang
                    ->trueColor('warning')
                    ->falseColor('gray'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}