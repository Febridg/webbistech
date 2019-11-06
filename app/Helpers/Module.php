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

public static function postdetail_edit($id)
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

public static function pagedetail_edit($id)
{
    $isikonten = Page::find($id);
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

public function kategorilist_edit()
{
    $kategori = Kategoripost::all();

    ?>
        <div class="single-widget category-widget">
			<h4 class="title">Kategori Artikel</h4>
			<ul>
                <?php
                    foreach ($kategori as $kt) {
                        ?>
                            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6><?php echo $kt->nama ?></h6></a></li>
                        <?php
                    }
                ?>
			</ul>
		</div>
    <?php
}

public function beritabaru_edit($id)
{
    if ($id==0) {
        $post = Post::orderBy('id','desc')->limit(5)->get();
    }else{
        $post = Post::where('kategoripost_id',$id)->orderBy('id','desc')->limit(5)->get();
    }

    ?>
        <div class="single-widget recent-posts-widget">
		    <h4 class="title">Berita Terbaru</h4>
			<div class="blog-list ">
                <?php
                    foreach ($post as $pst) {
                        ?>
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $pst->gambar ?>" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="#">
                                        <h4>
                                            <?php echo $pst->judul ?>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                ?>	
			</div>								
		</div>
    <?php
    
}

}