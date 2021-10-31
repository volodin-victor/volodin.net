<?php

namespace App\Models;

use App\Models\Pivot\FilmCategory;

class Film extends AbstractModel
{
    protected $table = 'film';

    protected $primaryKey = 'film_id';

    protected $fillable = [
        'title',
        'description',
        'release_year',
        'language_id',
        'rental_duration',
        'rental_rate',
        'length',
        'replacement_cost',
        'rating',
        'special_features',
        'fulltext',
    ];

    public function categories()
    {
        return $this->hasOneThrough(
            Category::class,
            FilmCategory::class,
            'film_id',
            'category_id',
            $this->primaryKey,
            'category_id');
    }

}
