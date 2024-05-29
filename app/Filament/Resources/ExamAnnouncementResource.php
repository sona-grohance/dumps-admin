<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamAnnouncementResource\Pages;
use App\Filament\Resources\ExamAnnouncementResource\RelationManagers;
use App\Models\ExamAnnouncement;
use App\Models\ExamDetail;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamAnnouncementResource extends Resource
{
    protected static ?string $model = ExamAnnouncement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Exam management";


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('exam_id')
                ->label('Exam')
                ->options(ExamDetail::all()->pluck('exam_code', 'id'))
                ->searchable(),
                TextInput::make('title_one'),
                DatePicker::make('date'),
                TextInput::make('title_two'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('exam.exam_code'),
                TextColumn::make('title_one'),
                TextColumn::make('date'),
                TextColumn::make('title_two'),
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
            'index' => Pages\ListExamAnnouncements::route('/'),
            'create' => Pages\CreateExamAnnouncement::route('/create'),
            'edit' => Pages\EditExamAnnouncement::route('/{record}/edit'),
        ];
    }
}
