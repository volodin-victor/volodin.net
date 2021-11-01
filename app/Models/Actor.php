<?php

namespace App\Models;


use App\Models\Pivot\FilmActor;

class Actor extends AbstractModel
{
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';

    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function films()
    {
        return $this->hasManyThrough(
            Film::class,
            FilmActor::class,
            'actor_id',
            'film_id',
            $this->primaryKey,
            'film_id');
    }
}
