<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecordController;

Route::get('/records/{page?}', [RecordController::class, 'records']); // Listado paginado
Route::get('/record/{id}', [RecordController::class, 'record']); // Disco por ID
Route::get('/genre/{id}/{page?}', [RecordController::class, 'genres']); // Discos por género
