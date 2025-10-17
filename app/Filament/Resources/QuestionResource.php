<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Models\Question;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationLabel = 'Questions';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('text')->label('Question')->required()->columnSpanFull(),
            Forms\Components\TextInput::make('key')->label('Key (optional)')->maxLength(255),
            Forms\Components\Select::make('locale')->required()->options([
                'en' => 'English',
                'de' => 'Deutsch',
            ])->default('en'),
            Forms\Components\TextInput::make('position')->numeric()->minValue(0)->default(0),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text')->label('Question')->wrap()->searchable(),
                Tables\Columns\TextColumn::make('locale')->badge()->sortable(),
                Tables\Columns\TextColumn::make('position')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('locale')->options([
                    'en' => 'English',
                    'de' => 'Deutsch',
                ]),
            ])
            ->recordUrl(fn ($record) => static::getUrl('edit', ['record' => $record]))
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }

    public static function getRelations(): array
    {
        return [
            \App\Filament\Resources\QuestionResource\RelationManagers\ResponsesRelationManager::class,
        ];
    }
}


