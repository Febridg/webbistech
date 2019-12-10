<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Menu;

use App\Post;

use App\Kategoripost;

use App\Page;

use App\Galeri;

use App\Kategorigaleri;

use App\Webmenu;

use App\Websubmenu;

use App\Modul;

use App\Konten;

use App\Link;

class pagectr extends Controller
{
    public function home()
    {
        $kontencenter = Konten::where('link_id',14)->where('posisi','Center')->orderBy('orders')->get();
        $kontenkanan = Konten::where('link_id',14)->where('posisi','Kanan')->orderBy('orders')->get();
        $jmlkontenkanan = Konten::where('link_id',14)->where('posisi','Kanan')->count();
        $link = Link::find(14);
        
        return view('page.page',['kontencenter' => $kontencenter,'kontenkanan' => $kontenkanan,'jmlkontenkanan' => $jmlkontenkanan,'link' => $link]);
    }

    public function page($page)
    {
        $link = Link::where('tag',$page)->first();

        $kontencenter = Konten::where('link_id',$link->id)->where('posisi','Center')->orderBy('orders')->get();
        $kontenkanan = Konten::where('link_id',$link->id)->where('posisi','Kanan')->orderBy('orders')->get();
        $jmlkontenkanan = Konten::where('link_id',$link->id)->where('posisi','Kanan')->count();

        return view('page.page',['kontencenter' => $kontencenter,'kontenkanan' => $kontenkanan,'jmlkontenkanan' => $jmlkontenkanan,'link' => $link]);
    }

    public function post($post)
    {
        $link = Link::where('tag','detail-post')->first();

        $detailpost = Post::where('tag',$post)->first();
        $kontenkanan = Konten::where('link_id',$link->id)->where('posisi','Kanan')->orderBy('orders')->get();
        $jmlkontenkanan = Konten::where('link_id',$link->id)->where('posisi','Kanan')->count();

        //$isi = html_entity_decode($detailpost->isi);

        return view('page.post',['detailpost' => $detailpost,'kontenkanan' => $kontenkanan,'jmlkontenkanan' => $jmlkontenkanan,'link' => $link]);
    }
}