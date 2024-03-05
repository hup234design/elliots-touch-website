<?php

namespace Hup234design\Cms\Filament\Resources\Services;

use Hup234design\Cms\Filament\Resources\Services\ServiceCategoryResource\Pages;
use Hup234design\Cms\Filament\Resources\Services\ServiceCategoryResource\RelationManagers;
use Hup234design\Cms\Models\ServiceCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Hup234design\Cms\Filament\Forms\Schemas\TitleSlug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceCategoryResource extends Resource
{
    protected static ?string $model = ServiceCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function shouldRegisterNavigation(): bool
    {
        return app(\Hup234design\Cms\Settings\ServicesSettings::class)->enabled;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TitleSlug::make(static::$model)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageServiceCategories::route('/'),
        ];
    }
}
