<?php

namespace App\Filament\Resources\QuestionResource\Pages;

use App\Filament\Resources\QuestionResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

use App\Filament\Resources\QuestionResource\Widgets\AnswersTable;

class ListQuestions extends ListRecords
{
    protected static string $resource = QuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Create question'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            AnswersTable::class,
        ];
    }
}


