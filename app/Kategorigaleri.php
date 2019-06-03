<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorigaleri extends Model
{
    protected $fillable = ['nama','tag','useradd','useredit'];

    public function galeris()
    {
        return $this->hasMany('App\Galeri','kategorigaleri_id');
    }
}