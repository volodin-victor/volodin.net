<?php

namespace App\Models;

use App\Models\Pivot\FilmCategory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends AbstractModel
{
    protected $table = 'category';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
    ];

    /**
     * @return HasManyThrough
     */
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
