<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statuslaporan extends Model
{
    public function laporan(){
        return $this->hasOne('App\laporan');
    }
}
