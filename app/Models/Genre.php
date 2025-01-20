<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function records()
    {
        return $this->belongsToMany(Record::class, 'genre_record', 'genre_id', 'record_id');
    }
}
