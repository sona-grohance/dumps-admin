<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubcategoriesResource\Pages;
use App\Filament\Resources\SubcategoriesResource\RelationManagers;
use App\Models\Category;
use App\Models\Subcategories;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Components\Livewire;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Form;
use Illuminate\Support\Str;



class SubcategoriesResource extends Resource
{
    protected static ?string $model = SubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('category_id')
            ->label('Category')
            ->options(Category::all()->pluck('category_name', 'id'))
            ->searchable(),
            Forms\Components\TextInput::make('name')
            ->label('Sub Category')
            ->required()
            ->live()
            ->afterStateUpdated(function(string $operation, $state,$set){
                $set('slug',Str::slug($state));
            }),
            Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord:true),
           
         ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('category.category_name'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSubcategories::route('/'),
            'create' => Pages\CreateSubcategories::route('/create'),
            'edit' => Pages\EditSubcategories::route('/{record}/edit'),
        ];
    }
}
