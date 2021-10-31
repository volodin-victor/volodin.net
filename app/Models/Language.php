<?php

namespace App\Models;

class Language extends AbstractModel
{
    protected $table = 'language';

    protected $primaryKey = 'language_id';

    protected $fillable = [
        'name',
    ];

}
