<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $fillable = ['link_id','modul_id','konten','post_id','kategoripost_id','page_id','kategorigaleri_id','posisi','orders'];

    public function links()
    {
        return $this->belongsTo('App\Link','link_id');
    }

    public function moduls()
    {
        return $this->belongsTo('App\Modul','modul_id');
    }

    public function posts()
    {
        return $this->belongsTo('App\Post','post_id');
    }

    public function kategoriposts()
    {
        return $this->belongsTo('App\Kategoripost','kategoripost_id');
    }

    public function pages()
    {
        return $this->belongsTo('App\Page','page_id');
    }

    public function kategorigaleris()
    {
        return $this->belongsTo('App\Kategorigaleri','kategorigaleri_id');
    }
}