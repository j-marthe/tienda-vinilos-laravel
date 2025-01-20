<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'artist', 'release_year', 'status', 'price', 'cover_image'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_record', 'record_id', 'genre_id');
    }
}
