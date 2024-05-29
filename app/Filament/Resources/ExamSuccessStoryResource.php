<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamSuccessStoryResource\Pages;
use App\Filament\Resources\ExamSuccessStoryResource\RelationManagers;
use App\Models\ExamDetail;
use App\Models\ExamSuccessStory;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamSuccessStoryResource extends Resource
{
    protected static ?string $model = ExamSuccessStory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('exam_id')
                ->label('Exam')
                ->options(ExamDetail::all()->pluck('exam_code', 'id'))
                ->searchable(),
                Forms\Components\Textarea::make('name')
                    ->required(),
                RichEditor::make('description')
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
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('exam.exam_code'),
                TextColumn::make('name')->limit(30),
                TextColumn::make('description')
                ->html()
                ->limit(50),
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
            'index' => Pages\ListExamSuccessStories::route('/'),
            'create' => Pages\CreateExamSuccessStory::route('/create'),
            'edit' => Pages\EditExamSuccessStory::route('/{record}/edit'),
        ];
    }
}
