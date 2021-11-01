<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AbstractPivotModel extends Pivot
{
    public $incrementing = true;
}
