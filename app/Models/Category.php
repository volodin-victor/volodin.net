<?php

namespace App\Models;

use App\Models\Pivot\FilmCategory;

class Category extends AbstractModel
{
    protected $table = 'category';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
    ];

    public function films()
    {
        return $this
            ->hasManyThrough(
                Film::class,
                FilmCategory::class,
                'category_id',
                'film_id',
                $this->primaryKey,
                'film_id'
            );
    }
}
