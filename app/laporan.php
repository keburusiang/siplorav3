<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    public function koordinat(){
        return $this->belongsTo('App\koordinat','koordinat_id','id');
    }

    public function statuslaporan(){
        return $this->belongsTo('App\statuslaporan','status_id','id');
    }
}
