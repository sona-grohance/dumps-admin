<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamListResource\Pages;
use App\Filament\Resources\ExamListResource\RelationManagers;
use App\Models\Category;
use App\Models\ExamList;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamListResource extends Resource
{
    protected static ?string $model = ExamList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Exam management";


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                ->label('Category')
                ->options(Category::all()->pluck('category_name', 'id'))
                ->searchable(),
                Forms\Components\TextInput::make('category_name')
                    ->required(),
                TextInput::make('exam_tracks'),
                TextInput::make('exam_question_number')
                ->numeric(),
                TextInput::make('dump_coverage'),
                TextInput::make('pass_dump_link'),
                TextInput::make('free_test_link'),
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
                Tables\Columns\TextColumn::make('category.category_name')->label('Category'),
                Tables\Columns\TextColumn::make('category_name'),
                Tables\Columns\TextColumn::make('exam_tracks'),
                Tables\Columns\TextColumn::make('exam_question_number'),
                Tables\Columns\TextColumn::make('dump_coverage'),
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
            'index' => Pages\ListExamLists::route('/'),
            'create' => Pages\CreateExamList::route('/create'),
            'edit' => Pages\EditExamList::route('/{record}/edit'),
        ];
    }
}
