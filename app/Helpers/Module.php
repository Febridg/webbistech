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

class Module {

public static function newsticker()
{
    $post = Post::orderBy('id','desc')->limit(5)->get();

        ?>
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
            <span class="text-uppercase cl2 p-r-8">
                Trending Now:
            </span>

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown"
                data-out="fadeOutDown">
                <?php
                    foreach ($post as $p) {
                        ?>
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    <?php echo $p->judul ?>
                </span>
                <?php
                    }
                    ?>
            </span>
        </div>
        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </div>
</div>
<?php       
}

public static function featurepost()
{

$postmain = Post::orderBy('id','desc')->limit(1)->get();
$postsub = Post::orderBy('id','desc')->offset(1)->limit(3)->get();
    
?>
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <?php
            foreach ($postmain as $pm) {
                ?>
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative"
                    style="background-image: url(<?php echo env('APP_URL') ?>/gallery/<?php echo $pm->gambar ?>);">
                    <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#"
                            class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            <?php echo $pm->kategoriposts->nama ?>
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                <?php echo $pm->judul ?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                    <?php
                $n = 1;
                foreach ($postsub as $ps) {
                    if ($n==1) {
                    ?>
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative"
                            style="background-image: url(<?php echo env('APP_URL') ?>/gallery/<?php echo $ps->gambar ?>);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="#"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    <?php echo $ps->kategoriposts->nama ?>
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html"
                                        class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                        <?php echo $ps->judul ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative"
                            style="background-image: url(<?php echo env('APP_URL') ?>/gallery/<?php echo $ps->gambar ?>);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    <?php echo $ps->kategoriposts->nama ?>
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html"
                                        class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        <?php echo $ps->judul ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    $n++;
                    
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

}

public static function postlistleft($id)
{

$postmain = Post::where('kategoripost_id',$id)->orderBy('id','desc')->limit(1)->get();
$postsub = Post::where('kategoripost_id',$id)->orderBy('id','desc')->offset(1)->limit(4)->get();
$kategori = Kategoripost::find($id);

?>
<div class="tab01 p-b-20">
    <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
        <!-- Brand tab -->
        <h3 class="f1-m-2 cl12 tab01-title">
            <?php echo $kategori->nama ?>
        </h3>

        <!-- Nav tabs -->
    </div>


    <!-- Tab panes -->
    <div class="tab-content p-t-35">
        <!-- - -->
        <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
            <div class="row">
                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                    <?php
                    foreach ($postmain as $pm) {
                    ?>
                    <!-- Item post -->
                    <div class="m-b-30">
                        <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                            <img src="<?php echo env('APP_URL') ?>/gallery/<?php echo $pm->gambar ?>" alt="IMG">
                        </a>

                        <div class="p-t-20">
                            <h5 class="p-b-5">
                                <a href="" class="f1-m-3 cl2 hov-cl10 trans-03">
                                    <?php echo $pm->judul ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                    <?php
                    foreach ($postsub as $ps) {
                    ?>
                    <!-- Item post -->
                    <div class="flex-wr-sb-s m-b-30">
                        <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                            <img src="<?php echo env('APP_URL') ?>/gallery/<?php echo $ps->gambar ?>" alt="IMG">
                        </a>

                        <div class="size-w-2">
                            <h5 class="p-b-5">
                                <a href="" class="f1-s-5 cl3 hov-cl10 trans-03">
                                    <?php echo $ps->judul ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

}

public static function categorylist()
{

$kategori = Kategoripost::all();
    
?>
<div class="p-b-60">
    <div class="how2 how2-cl4 flex-s-c">
        <h3 class="f1-m-2 cl3 tab01-title">
            Kategori
        </h3>
    </div>

    <ul class="p-t-35">
        <?php
        foreach ($kategori as $k) {
        ?>
        <li class="how-bor3 p-rl-4">
            <a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                <?php echo $k->nama ?>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>
<?php

}

public static function postdetail($id,$konten)
{

if ($konten=='Post') {
    $isikonten = Post::find($id);
}elseif ($konten=='Page') {
    $isikonten = Page::find($id);
}

?>
<div class="p-r-10 p-r-0-sr991">
    <!-- Blog Detail -->
    <div class="p-b-70">
        <?php
        if ($konten=='Post') {
        ?>
        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
            <?php echo $isikonten->kategoriposts->nama ?>
        </a>
        <?php
        }
        ?>

        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
            <?php echo $isikonten->judul ?>
        </h3>

        <div class="wrap-pic-max-w p-b-30">
            <img src="<?php echo env('APP_URL') ?>/gallery/<?php echo $isikonten->gambar ?>" alt="IMG">
        </div>

        <?php echo $isikonten->isi ?>

    </div>

</div>
<?php

}

public static function categorypage($id)
{
    $postlist = Post::where('kategoripost_id',$id)->orderBy('id','desc')->paginate(5);    
?>
<div class="p-r-10 p-r-0-sr991">
    <div class="m-t--65 p-b-40">
        <?php
        foreach ($postlist as $pl) {
        ?>
        <!-- Item Blog -->
        <div class="flex-col-s-c how-bor2 p-t-65 p-b-40">
            <a href="#" class="f1-s-10 cl2 text-uppercase txt-center hov-cl10 trans-03 p-b-40">
                <?php echo $pl->kategoriposts->nama ?>
            </a>

            <h5 class="p-b-17 txt-center">
                <a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                    <?php echo $pl->judul ?>
                </a>
            </h5>

            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03 m-b-30">
                <img src="<?php echo env('APP_URL') ?>/gallery/<?php echo $pl->gambar ?>" alt="IMG">
            </a>

            <p class="f1-s-11 cl6 txt-center p-b-22">
                <?php
                $skiphtml = strip_tags($pl->isi);
                $cut = substr($skiphtml,0,100);

                echo $cut;
                ?>
            </p>

            <a href="" class="f1-s-1 cl9 hov-cl10 trans-03">
                Read More
                <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    $jmlhal = ceil($postlist->total()/$postlist->perPage());
    ?>

    <!-- Pagination -->
    <div class="flex-wr-c-c m-rl--7 p-t-15">
        <?php
        for ($i=1; $i <= $jmlhal ; $i++) { 
            if ($postlist->currentPage()==$i) {
                ?>
        <a href="<?php echo $postlist->url($i) ?>"
            class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active"><?php echo $i; ?></a>
        <?php
            }else {
                ?>
        <a href="<?php echo $postlist->url($i) ?>"
            class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7"><?php echo $i; ?></a>
        <?php
            }
        }
        ?>
    </div>
</div>
<?php
}

}