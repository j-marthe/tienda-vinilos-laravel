<?php

namespace App\Http\Controllers;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
     // Página de inicio con 5 discos (2 fijos + 3 aleatorios)
     public function index()
     {
         // Obtener los 2 discos reales creados manualmente en Tinker
         $fixedRecords = Record::whereIn('title', ['A Night at the Opera', 'Thriller'])->get();
 
         // Obtener 3 discos aleatorios excluyendo los fijos (Los tres primeros)
         $randomRecords = Record::whereNotIn('id', $fixedRecords->pluck('id'))->inRandomOrder()->limit(3)->get();
 
         // Hacer un merge para combinar ambos conjuntos
         $records = $fixedRecords->merge($randomRecords);
 
         return view('home', compact('records'));
     }
 
     // Página de detalle de un disco
     public function show($id)
     {
         $record = Record::with('genres')->findOrFail($id);
         return view('record', compact('record'));
     }
}
