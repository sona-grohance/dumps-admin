<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamFAQResource\Pages;
use App\Filament\Resources\ExamFAQResource\RelationManagers;
use App\Models\ExamDetail;
use App\Models\ExamFAQ;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamFAQResource extends Resource
{
    protected static ?string $model = ExamFAQ::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('exam_id')
            ->label('Exam')
            ->options(ExamDetail::all()->pluck('exam_code', 'id'))
            ->searchable(),
            Forms\Components\Textarea::make('question')
                ->required()
                ->unique(ignoreRecord: true),
            RichEditor::make('answer')
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
            TextColumn::make('question')->limit(30),
            TextColumn::make('answer')
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
            'index' => Pages\ListExamFAQS::route('/'),
            'create' => Pages\CreateExamFAQ::route('/create'),
            'edit' => Pages\EditExamFAQ::route('/{record}/edit'),
        ];
    }
}
