<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'movie_timestamp',
        'movie_id',
        'character_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'movie_timestamp' => 'float',
        'movie_id' => 'integer',
        'character_id' => 'integer',
    ];


    public function movie()
    {
        return $this->belongsTo(\App\Models\Movie::class);
    }

    public function character()
    {
        return $this->belongsTo(\App\Models\Character::class);
    }
}
