<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['nama','tag','webmenu_id','websubmenu_id','posisi','orders'];

    public function webmenus()
    {
        return $this->belongsTo('App\Webmenu','webmenu_id');
    }

    public function websubmenus()
    {
        return $this->belongsTo('App\Websubmenu','websubmenu_id');
    }

    public function kontens()
    {
        return $this->hasMany('App\Konten','link_id');
    }
}