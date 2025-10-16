<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\TranslationController;
use App\Http\Controllers\Api\LeadController;

// Public content endpoints
Route::get('/sections', [SectionController::class, 'index']);
Route::get('/sections/{key}', [SectionController::class, 'show']);

// Lead capture endpoints
Route::post('/stay-loop', [LeadController::class, 'storeNewsletter']);
Route::post('/register', [LeadController::class, 'storeBeta']);
Route::post('/event-partner', [LeadController::class, 'storeEventPartner']);

// Translations
Route::get('/translations', [TranslationController::class, 'index']);
