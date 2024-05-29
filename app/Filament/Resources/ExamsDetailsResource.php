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
use App\Models\SubSubCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;

class ExamsDetailsResource extends Resource
{
    protected static ?string $model = ExamDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Exam management";


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
                    ->afterStateUpdated(fn (Set $set) => $set('sub_sub_category_id',null)),
                    Select::make('sub_sub_category_id')
                    ->label('Sub Sub Categories')
                    ->options(fn (Get $get): Collection => SubSubCategory::query()
                    ->where('sub_category_id',$get('sub_category_id'))
                    ->pluck('name','id'))
                    ->searchable()
                    ->preload()
                    ->live(),
                Forms\Components\TextInput::make('exam_title')
                    ->label('Exam Title')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->required(),
                RichEditor::make('exam_description')
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
                FileUpload::make('image')
                ->required(),
                TextInput::make('exam_code'),
                TextInput::make('languages'),
                TextInput::make('exam_fee'),
                TextInput::make('exam_format'),
                TextInput::make('exam_duration'),
                
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
                Tables\Columns\TextColumn::make('subSubCategory.name'),
                ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('exam_title')->limit(30),
                Tables\Columns\TextColumn::make('exam_description')
                ->html()
                ->limit(30),
                Tables\Columns\TextColumn::make('exam_code'),
                Tables\Columns\TextColumn::make('exam_fee'),
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
