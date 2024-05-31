<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProxyResource\Pages;
use App\Filament\Resources\ProxyResource\RelationManagers;
use App\Models\Proxy;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class ProxyResource extends Resource
{
    protected static ?string $model = Proxy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                    ->live()
                    ->debounce(250)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->unique(table: Proxy::class,ignoreRecord:true)
                    ->required(),
            Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord:true),
            Forms\Components\TextInput::make('title')
                ->required(),
            FileUpload::make('banner_image')
                    ->label('Banner Image'),
                    RichEditor::make('table_contents')
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
                ->label('Table Contents')
                ->required(),
            Forms\Components\Textarea::make('description'),
            FileUpload::make('wp_image'),
            RichEditor::make('long_description')
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
                ->label('Content and description')
                ->required(),
                RichEditor::make('read_contents')
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
                ->label('Read Contents')
                ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                ->getStateUsing(function ($record, $rowLoop, HasTable $livewire) {
                    return (string) ($rowLoop->iteration + ($livewire->getTableRecordsPerPage() * ($livewire->getTablePage() - 1)));
                }),
            Tables\Columns\TextColumn::make('category'),
            Tables\Columns\TextColumn::make('title')->limit(20),
            ImageColumn::make('banner_image'),


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
            'index' => Pages\ListProxies::route('/'),
            'create' => Pages\CreateProxy::route('/create'),
            'edit' => Pages\EditProxy::route('/{record}/edit'),
        ];
    }
}
