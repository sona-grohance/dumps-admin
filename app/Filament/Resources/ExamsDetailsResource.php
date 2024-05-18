<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamsDetailsResource\Pages;
use App\Filament\Resources\ExamsDetailsResource\RelationManagers;
use App\Models\ExamDetail;
use App\Models\ExamsDetails;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Ramsey\Collection\Collection as CollectionCollection;
use App\Models\Category;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\Textarea;



class ExamsDetailsResource extends Resource
{
    protected static ?string $model = ExamDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship(name: 'Category', titleAttribute: 'category_name')
                    ->label('Categories')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('sub_category_id',null))
                    ->required(),

                Forms\Components\Select::make('sub_category_id')
                    ->label('Sub Categories')
                    ->options(fn (Get $get): Collection => SubCategory::query()
                    ->where('category_id',$get('category_id'))
                    ->pluck('name','id'))
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                Forms\Components\TextInput::make('exam_title')
                    ->label('Exam Title')
                    ->rules(['required', 'unique:exam_details,exam_title'])
                    ->required(),
                Textarea::make('exam_description_1')
                ->required(),
                Textarea::make('exam_description_2')
                ->required(),
                
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
                Tables\Columns\TextColumn::make('Category.category_name'),
                Tables\Columns\TextColumn::make('subCategory.name'),
                Tables\Columns\TextColumn::make('exam_title'),
                Tables\Columns\TextColumn::make('exam_description_1'),
                Tables\Columns\TextColumn::make('exam_description_2'),
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
            'index' => Pages\ListExamsDetails::route('/'),
            'create' => Pages\CreateExamsDetails::route('/create'),
            'edit' => Pages\EditExamsDetails::route('/{record}/edit'),
        ];
    }
}
