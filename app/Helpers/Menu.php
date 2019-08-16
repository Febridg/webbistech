<?php
namespace App\Helpers;

use App\Webmenu;
use App\Websubmenu;
use App\Link;

class Menu {
    public static function get_menu($posisi) {
        $menu = Link::where('posisi',$posisi)->where('websubmenu_id',0)->where('id','!=',1)->groupBy('webmenu_id')->orderBy('orders')->get();
        return ($menu);
    }

    public static function get_submenu($webmenu) {
        $submenu = Link::where('webmenu_id',$webmenu)->orderBy('orders')->get();
        return ($submenu);
    }
}