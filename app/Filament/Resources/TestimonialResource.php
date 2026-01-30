<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationLabel = 'Testimonial';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan nama...'),

                        TextInput::make('job_title')
                            ->label('Pekerjaan / Jabatan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Graphic Designer'),

                        Textarea::make('content')
                            ->label('Isi Testimoni')
                            ->required()
                            ->rows(3)
                            ->placeholder('Masukkan testimoni...'),

                        Select::make('rating')
                            ->label('Rating')
                            ->options([
                                1 => '1 Bintang',
                                2 => '2 Bintang',
                                3 => '3 Bintang',
                                4 => '4 Bintang',
                                5 => '5 Bintang',
                            ])
                            ->default(5)
                            ->required(),

                        Select::make('avatar_color')
                            ->label('Warna Avatar')
                            ->options([
                                'gold' => 'Gold',
                                'blue' => 'Blue',
                                'purple' => 'Purple',
                                'green' => 'Green',
                                'red' => 'Red',
                                'pink' => 'Pink',
                            ])
                            ->default('gold')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Semakin kecil angka, semakin kiri posisinya.'),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('job_title')
                    ->label('Pekerjaan')
                    ->searchable(),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(fn ($state) => str_repeat('★', $state))
                    ->color('warning'),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
