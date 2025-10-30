<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Users';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->role === 'admin';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('First name')->required(),
            Forms\Components\TextInput::make('last_name')->label('Last name')->required(),
            Forms\Components\TextInput::make('email')->email()->unique(ignoreRecord: true)->required(),
            Forms\Components\TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => $state ? Hash::make($state) : null)
                ->required(fn (string $context) => $context === 'create')
                ->dehydrated(fn ($state) => filled($state)),
            Forms\Components\FileUpload::make('avatar_path')->label('Avatar')->disk('public')->directory('avatars')->image()->nullable(),
            Forms\Components\Select::make('role')->options([
                'admin' => 'Admin',
                'user' => 'User (blogs only)',
            ])->required()->default('user'),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar_path')->disk('public'),
                Tables\Columns\TextColumn::make('name')->label('First name')->searchable(),
                Tables\Columns\TextColumn::make('last_name')->label('Last name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('role')->badge()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}


