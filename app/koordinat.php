<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class koordinat extends Model
{
    public function laporan()
    {
        return $this->hasOne('App\laporan');
    }
}
