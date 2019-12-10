<?php
namespace App\Helpers;

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

use App\Helpers\Module;

class Pagekonten {
    public static function get_konten($module,$konten,$post_id,$kategoripost_id,$page_id,$kategorigaleri_id) {
        if ($konten=='Post') {
            $id = $post_id;
        }
        elseif ($konten=='Kategori Post') {
            $id = $kategoripost_id;
        }
        elseif ($konten=='Page') {
            $id = $page_id;
        }
        elseif ($konten=='Galeri') {
            $id = $kategorigaleri_id;
        }else {
            $id = 0;
        }

        if ($module==3) {
            Module::portofolio();
        }
        elseif ($module==4) {
            Module::client();
        }
        elseif ($module==5) {
            Module::fplistartikel($id);
        }
        elseif ($module==7) {
            Module::listartkel($id);
        }
        elseif ($module==9) {
            Module::kategorilist();
        }
        elseif ($module==10) {
            Module::kontak($id);
        }
        elseif ($module==11) {
            Module::post($id);
        }
        elseif ($module==12) {
            Module::newpost($id);
        }
        elseif ($module==13) {
            Module::page($id);
        }
    }
}