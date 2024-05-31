<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamBannerResource\Pages;
use App\Filament\Resources\ExamBannerResource\RelationManagers;
use App\Models\ExamBanner;
use App\Models\ExamDetail;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class ExamBannerResource extends Resource
{
    protected static ?string $model = ExamBanner::class;

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
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->rules(['required'])
                ->required(),
                RichEditor::make('description_one')
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
            RichEditor::make('description_two')
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
                Tables\Columns\TextColumn::make('no')
                    ->getStateUsing(function ($record, $rowLoop, HasTable $livewire) {
                        return (string) ($rowLoop->iteration + ($livewire->getTableRecordsPerPage() * ($livewire->getTablePage() - 1)));
                    }),
                Tables\Columns\TextColumn::make('exam.exam_title')->limit(30),
                Tables\Columns\TextColumn::make('title')->wrap(),
                Tables\Columns\TextColumn::make('description_one')
                ->html()
                ->wrap(),
                Tables\Columns\TextColumn::make('description_two')
                ->html()
                ->wrap(),
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
            'index' => Pages\ListExamBanners::route('/'),
            'create' => Pages\CreateExamBanner::route('/create'),
            'edit' => Pages\EditExamBanner::route('/{record}/edit'),
        ];
    }
}
