<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Pengaturan Situs';

    protected static ?string $modelLabel = 'Pengaturan';

    protected static ?string $pluralModelLabel = 'Pengaturan Situs';

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('key')
                            ->label('Key')
                            ->required()
                            ->disabled()
                            ->maxLength(255),

                        Select::make('type')
                            ->label('Tipe')
                            ->options([
                                'text' => 'Text',
                                'textarea' => 'Textarea',
                                'image' => 'Image',
                            ])
                            ->required()
                            ->reactive(),

                        TextInput::make('value')
                            ->label('Nilai')
                            ->maxLength(65535)
                            ->visible(fn ($get) => $get('type') === 'text'),

                        Textarea::make('value')
                            ->label('Nilai')
                            ->rows(3)
                            ->visible(fn ($get) => $get('type') === 'textarea'),

                        FileUpload::make('value')
                            ->label('Gambar')
                            ->image()
                            ->directory('settings')
                            ->visible(fn ($get) => $get('type') === 'image'),

                        Select::make('group')
                            ->label('Grup')
                            ->options([
                                'general' => 'Umum',
                                'contact' => 'Kontak',
                                'branding' => 'Branding',
                                'seo' => 'SEO',
                            ])
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group')
                    ->label('Grup')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'general' => 'gray',
                        'contact' => 'success',
                        'branding' => 'warning',
                        'seo' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('value')
                    ->label('Nilai')
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge(),
            ])
            ->defaultSort('group')
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->label('Grup')
                    ->options([
                        'general' => 'Umum',
                        'contact' => 'Kontak',
                        'branding' => 'Branding',
                        'seo' => 'SEO',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }
}
