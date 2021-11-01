<?php

namespace App\Models;

class Language extends AbstractModel
{
    protected $table = 'language';

    protected $primaryKey = 'language_id';

    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function films()
    {
        return $this->hasMany(Film::class, 'language_id', $this->primaryKey);
    }

}
