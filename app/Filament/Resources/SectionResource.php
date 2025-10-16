<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Models\Section;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Filament\Resources\Resource;
// use Filament\Support\Enums\IconName;
use Filament\Tables;
use Filament\Tables\Table;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Sections';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('key')
                ->required()
                ->unique(
                    table: 'sections',
                    column: 'key',
                    ignorable: fn (?\App\Models\Section $record) => $record,
                    modifyRuleUsing: fn (Unique $rule, Get $get) => $rule->where('locale', (string) ($get('locale') ?: 'en')),
                ),
            Forms\Components\Select::make('locale')
                ->options([
                    'en' => 'English',
                    'de' => 'Deutsch',
                ])
                ->default('en')
                ->required(),
            Forms\Components\FileUpload::make('bg_image')
                ->label('Background image')
                ->disk('public')
                ->directory('sections')
                ->image()
                ->imageEditor()
                ->nullable()
                ->statePath('content.bg_image')
                ->afterStateHydrated(function ($component, $state, ?\App\Models\Section $record) {
                    $stored = data_get($record?->content, 'bg_image');
                    if ($stored) {
                        $component->state($stored);
                    }
                })
                ->hidden(fn (Get $get) => !in_array((string) $get('key'), ['hero', 'our_events'])),
            Forms\Components\TextInput::make('content.title')
                ->label('Title')
                ->maxLength(255),
            Forms\Components\TextInput::make('content.title_highlight')
                ->label('Title highlight')
                ->maxLength(255),
            Forms\Components\TextInput::make('content.subheading')
                ->label('Subheading')
                ->maxLength(255),
            Forms\Components\Textarea::make('content.text')
                ->label('Text')
                ->rows(5)
                ->columnSpanFull(),
            Forms\Components\TextInput::make('content.countdown_target')
                ->label('Countdown target (ISO)')
                ->placeholder('YYYY-MM-DDTHH:MM:SS'),
            Forms\Components\Textarea::make('content.text_content')
                ->label('Text content')
                ->rows(5)
                ->columnSpanFull(),

            // Video section specific fields
            Forms\Components\TextInput::make('content.video_url')
                ->label('Video URL (YouTube)')
                ->placeholder('https://www.youtube.com/watch?v=...')
                ->url()
                ->hidden(fn (Get $get) => (string) $get('key') !== 'video'),
            Forms\Components\FileUpload::make('video_thumbnail')
                ->label('Video thumbnail image')
                ->disk('public')
                ->directory('sections')
                ->image()
                ->imageEditor()
                ->nullable()
                ->statePath('content.thumbnail_image')
                ->afterStateHydrated(function ($component, $state, ?\App\Models\Section $record) {
                    $stored = data_get($record?->content, 'thumbnail_image');
                    if ($stored) {
                        $component->state($stored);
                    }
                })
                ->hidden(fn (Get $get) => (string) $get('key') !== 'video'),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('content.title')->label('Title')->searchable(),
                Tables\Columns\TextColumn::make('locale')->badge()->sortable(),
                Tables\Columns\ImageColumn::make('image_path')->disk('public'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('locale')
                    ->options([
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}


