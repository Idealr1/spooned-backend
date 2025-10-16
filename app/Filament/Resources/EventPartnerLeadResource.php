<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventPartnerLeadResource\Pages;
use App\Models\EventPartnerLead;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Resources\Resource;
// use Filament\Support\Enums\IconName;
use Filament\Tables;

class EventPartnerLeadResource extends Resource
{
    protected static ?string $model = EventPartnerLead::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationLabel = 'Event partner leads';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->label('Company'),
                Tables\Columns\TextColumn::make('contact_name')->label('Contact'),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone'),
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
            'index' => Pages\ListEventPartnerLeads::route('/'),
        ];
    }
}


