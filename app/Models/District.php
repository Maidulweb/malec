<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Division;

class District extends Model
{
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
