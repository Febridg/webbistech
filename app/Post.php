<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['kategoripost_id','judul','tag','isi','gambar','author','tgl_post','publis','useradd','useredit'];

    public function kategoriposts()
    {
        return $this->belongsTo('App\Kategoripost','kategoripost_id');
    }
}