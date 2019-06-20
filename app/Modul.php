<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    public function kontens()
    {
        return $this->hasMany('App\Konten','modul_id');
    }
}