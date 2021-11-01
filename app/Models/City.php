<?php

namespace App\Models;


class City extends AbstractModel
{
    protected $table = 'city';

    protected $primaryKey = 'city_id';

    protected $fillable = [
        'city',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
