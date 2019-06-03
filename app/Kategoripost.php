<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoripost extends Model
{
    protected $fillable = ['nama','tag','useradd','useredit'];

    public function posts()
    {
        return $this->hasMany('App\Post','kategoripost_id');
    }
}