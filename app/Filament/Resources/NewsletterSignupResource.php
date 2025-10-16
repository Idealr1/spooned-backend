<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterSignupResource\Pages;
use App\Models\NewsletterSignup;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Resources\Resource;
// use Filament\Support\Enums\IconName;
use Filament\Tables;

class NewsletterSignupResource extends Resource
{
    protected static ?string $model = NewsletterSignup::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Stay in the Loop Emails';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('source')->badge()->searchable(),
                Tables\Columns\TextColumn::make('ip')->label('IP'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('today')
                    ->query(fn ($q) => $q->whereDate('created_at', now()->toDateString())),
                Tables\Filters\SelectFilter::make('source')
                    ->options([
                        'stay-in-the-loop' => 'Stay in the loop',
                        'other' => 'Other',
                    ]),
            ])
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsletterSignups::route('/'),
        ];
    }
}


