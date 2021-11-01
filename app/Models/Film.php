<?php

namespace App\Models;

use App\Models\Pivot\FilmActor;
use App\Models\Pivot\FilmCategory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

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

    /**
     * @return HasOneThrough
     */
    public function categories()
    {
        return $this->hasOneThrough(
            Category::class,
            FilmCategory::class,
            'film_id',
            'category_id',
            $this->primaryKey,
            'category_id'
        );
    }

    /**
     * @return HasManyThrough
     */
    public function actors()
    {
        return $this->hasManyThrough(
            Actor::class,
            FilmActor::class,
            'film_id',
            'actor_id',
            $this->primaryKey,
            'actor_id'
        );
    }

    /**
     * @return HasOne
     */
    public function language()
    {
        return $this->hasOne(Language::class, 'language_id', 'language_id');
    }

}
