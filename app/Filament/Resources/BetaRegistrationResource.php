<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BetaRegistrationResource\Pages;
use App\Models\BetaRegistration;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables;
// use Filament\Support\Enums\IconName; 

class BetaRegistrationResource extends Resource
{
    protected static ?string $model = BetaRegistration::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationLabel = 'Beta registrations';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('first_name')->label('First name'),
                Tables\Columns\TextColumn::make('last_name')->label('Last name'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('today')
                    ->query(fn ($q) => $q->whereDate('created_at', now()->toDateString())),
            ])
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBetaRegistrations::route('/'),
        ];
    }
}


