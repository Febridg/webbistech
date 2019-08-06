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
        }

        if ($module==3) {
            Module::newsticker();
        }
        elseif ($module==4) {
            Module::featurepost();
        }
        elseif ($module==5) {
            Module::postlistleft($id);
        }
        elseif ($module==6) {
            Module::categorylist();
        }
        elseif ($module==9) {
            Module::postdetail($id,$konten);
        }
        elseif ($module==7) {
            Module::categorypage($id);
        }
    }
}