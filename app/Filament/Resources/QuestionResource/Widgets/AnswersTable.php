<?php

namespace App\Filament\Resources\QuestionResource\Widgets;

use App\Models\QuestionResponse;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class AnswersTable extends BaseWidget
{
    protected static ?string $heading = 'Answers';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                QuestionResponse::query()->latest()
            )
            ->columns([
                Tables\Columns\TextColumn::make('question.text')->label('Question')->wrap(),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('response')->label('Response')->wrap(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Answered at')->sortable(),
            ])
            ->filters([]);
    }
}


