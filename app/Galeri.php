<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['kategorigaleri_id','judul','tag','gambar','caption','author','tgl_post','publis','useradd','useredit'];

    public function kategorigaleris()
    {
        return $this->belongsTo('App\Kategorigaleri','kategorigaleri_id');
    }
}