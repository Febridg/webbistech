<?php
namespace App\Helpers;

use App\Page;

class Konten {
    public static function get_konten() {
        $page = Page::find(1);
        return ($page->judul);
    }
}