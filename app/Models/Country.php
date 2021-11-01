<?php

namespace App\Models;

class Country extends AbstractModel
{
    protected $table = 'country';

    protected $primaryKey = 'country_id';

    protected $fillable = [
        'country',
    ];


    public function cities()
    {
        return $this->hasMany(City::class, 'country_id',$this->primaryKey);
    }
}
