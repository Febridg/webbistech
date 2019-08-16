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
        $newsticker = Konten::where('link_id',1)->where('modul_id',3);
        $featurepost = Konten::where('link_id',1)->where('modul_id',4);
        $kontencenter = Konten::where('link_id',1)->where('posisi','Center')->orderBy('orders')->get();
        $kontenkanan = Konten::where('link_id',1)->where('posisi','Kanan')->orderBy('orders')->get();

        return view('page.page',['newsticker' => $newsticker,'featurepost' => $featurepost,'kontencenter' => $kontencenter,'kontenkanan' => $kontenkanan]);
    }

    public function page($page)
    {
        $link = Link::where('tag',$page)->first();

        $newsticker = Konten::where('link_id',$link->id)->where('modul_id',3);
        $featurepost = Konten::where('link_id',$link->id)->where('modul_id',4);
        $kontencenter = Konten::where('link_id',$link->id)->where('posisi','Center')->orderBy('orders')->get();
        $kontenkanan = Konten::where('link_id',$link->id)->where('posisi','Kanan')->orderBy('orders')->get();

        return view('page.page',['newsticker' => $newsticker,'featurepost' => $featurepost,'kontencenter' => $kontencenter,'kontenkanan' => $kontenkanan]);
    }
}