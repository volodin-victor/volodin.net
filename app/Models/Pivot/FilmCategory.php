<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FilmCategory extends Pivot
{
    protected $table = 'film_category';
    public $incrementing = true;

}
