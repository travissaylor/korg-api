<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'overview',
        'release_date',
        'cover_url',
        'phase',
        'duration',
        'directed_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'release_date' => 'date',
    ];


    public function quotes()
    {
        return $this->hasMany(\App\Models\Quote::class);
    }

    public function characters()
    {
        return $this->belongsToMany(\App\Models\Characters::class);
    }
}
