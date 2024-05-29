<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubSubCategoryResource\Pages;
use App\Filament\Resources\SubSubCategoryResource\RelationManagers;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubSubCategoryResource extends Resource
{
    protected static ?string $model = SubSubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_category_id')
            ->label('Sub category')
            ->options(SubCategory::all()->pluck('name', 'id'))
            ->searchable(),
            Forms\Components\TextInput::make('name')
            ->label('Sub Sub Category')
            ->live()
            ->debounce(250)
            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
            ->required()
            ->unique(table: SubSubCategory::class)
            ->regex('/^[A-Za-z0-9 ]+$/')
            ->validationMessages([
                'regex' => 'Special characters are not allowed.',
            ]),
            Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord:true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                ->getStateUsing(function ($record, $rowLoop, HasTable $livewire) {
                    return (string) ($rowLoop->iteration + ($livewire->getTableRecordsPerPage() * ($livewire->getTablePage() - 1)));
                }),
                Tables\Columns\TextColumn::make('subcategory.name')
                ->label('Sub Category'),
                Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListSubSubCategories::route('/'),
            'create' => Pages\CreateSubSubCategory::route('/create'),
            'edit' => Pages\EditSubSubCategory::route('/{record}/edit'),
        ];
    }
}
