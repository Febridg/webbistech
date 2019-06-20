<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['judul','tag','isi','gambar','publis','useradd','useredit'];

    public function kontens()
    {
        return $this->hasMany('App\Konten','page_id');
    }
}