<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Websubmenu extends Model
{
    protected $fillable = ['nama','tag'];

    public function link()
    {
        return $this->hasMany('App\Link','websubmenu_id');
    }
}