<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webmenu extends Model
{
    protected $fillable = ['nama','tag'];

    public function link()
    {
        return $this->hasMany('App\Link','webmenu_id');
    }
}