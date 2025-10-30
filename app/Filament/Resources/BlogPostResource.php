<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Blog Posts';

    public static function shouldRegisterNavigation(): bool
    {
        $role = auth()->user()?->role;
        return in_array($role, ['admin', 'user'], true);
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')->required()->columnSpanFull(),
            Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
            Forms\Components\Select::make('locale')->required()->options([
                'en' => 'English',
                'de' => 'Deutsch',
            ])->default('en'),
            Forms\Components\FileUpload::make('thumbnail_path')->label('Thumbnail')->disk('public')->directory('blogs')->image()->nullable(),
            Forms\Components\FileUpload::make('detail_images')->label('Detail images')->multiple()->reorderable()->disk('public')->directory('blogs')->image()->nullable(),
            Forms\Components\RichEditor::make('description')->label('Description')->columnSpanFull(),
            Forms\Components\Select::make('categories')
                ->label('Categories')
                ->multiple()
                ->preload()
                ->relationship('categories', 'name')
                ->options(fn () => BlogCategory::query()->pluck('name', 'id')->toArray()),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_path')->disk('public'),
                Tables\Columns\TextColumn::make('title')->searchable()->wrap(),
                Tables\Columns\TextColumn::make('locale')->badge()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}


