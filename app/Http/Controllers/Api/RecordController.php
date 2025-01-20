<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Genre;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    // 1️. Listado de discos paginados
    public function records($page = 1)
    {
        $records = Record::select('id', 'title as album', 'price')
            ->paginate(10, ['*'], 'page', $page);

        return response()->json($records);
    }

    // 2. Info completa de un disco por ID
    public function record($id)
    {
        $record = Record::find($id);

        if (!$record) {
            return response()->json(['error' => 'Disco no encontrado'], 404);
        }

        return response()->json($record);
    }

    // 3. Listado de discos por genero
    public function genres($id, $page = 1)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['error' => 'Género no encontrado'], 404);
        }

        $records = Record::join('genre_record', 'records.id', '=', 'genre_record.record_id')
            ->where('genre_record.genre_id', $id)
            ->select('records.id', 'records.title', 'records.release_year') // Se específica "records.id"
            ->paginate(10);
        
        // Agregar el nombre del género en la respuesta
        return response()->json([
            'genre' => $genre->name, // Incluir nombre del género
            'records' => $records
        ]);
    }

}
