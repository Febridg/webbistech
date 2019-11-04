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

use App\Portofolio;

use App\Client;

class Module {

public static function portofolio()
{
    $portofolio = Portofolio::orderBy('id','desc')->limit(3)->get();

?>
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Portofolio</h1>
                    <p>Proyek yang sudah kami kerjakan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($portofolio as $p) {
                    ?>
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $p->gambar ?>"
                            alt="">
                    </div>
                    <div class="detail">
                        <a href="#">
                            <h4><?php echo $p->judul ?></h4>
                        </a>
                        <p>
                            <?php echo $p->isi ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<?php       
}

public static function client()
{
    $client = Client::orderBy('id','desc')->limit(7)->get();

?>
<section class="galery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Client</h1>
                    <p>Client yang telah berkerja sama dengan kami</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($client as $cl) {
                    ?>
            <div class="col-lg-7 col-md-6">
                <a href="<?php echo env('APP_URL') ?>/gallery/<?php echo $cl->gambar ?>" class="single-gallery">
                    <img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $cl->gambar ?>" alt="">
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<?php 
}

public static function fplistartikel($id)
{
    $post = Post::where('kategoripost_id',$id)->orderBy('id','desc')->limit(4)->get();
    $kategori = Kategoripost::find($id);
?>
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10"><?php echo $kategori->nama ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($post as $ps) {
                    $skiphtml = strip_tags($ps->isi);
                    $isi = substr($skiphtml,0,100); 
                    ?>
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $ps->gambar ?>" alt="">
                </div>
                <p class="date"><?php echo $ps->tgl_post ?></p>
                <a href="blog-single.html">
                    <h4><?php $ps->judul ?></h4>
                </a>
                <p>
                    <?php echo $isi ?>
                </p>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<?php
}

public static function listartikel_edt($id)
{

    $post = Post::where('kategoripost_id',$id)->orderBy('id','desc')->paginate(5);
    $kategori = Kategoripost::find($id);

foreach ($post as $pst) {
    $skiphtml = strip_tags($pst->isi);
    $isi = substr($skiphtml,0,100);
    ?>
        <div class="single-post">
			<img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $pst->gambar ?>" alt="">
			<a href="">
			    <h1><?php echo $pst->judul ?></h1>
			</a>
			<p>
			<?php echo $pst->isi ?>
			</p>
		</div>
	<?php
}

}

public static function postdetail($id)
{
    $isikonten = Post::find($id);
?>
<div class="single-post">
	<img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $isikonten->gambar ?>" alt="">
	<a href="#">
		<h1>
		<?php echo $isikonten->judul ?>
	    </h1>
	</a>
	<div class="content-wrap">									
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