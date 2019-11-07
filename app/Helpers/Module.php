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

public static function listartkel($id)
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

$jmlhal = ceil($post->total()/$post->perPage());

?>
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
<?php

}

public static function post($id)
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

public static function page($id)
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

public function kategorilist()
{
    $kategori = Kategoripost::all();

    ?>
<div class="single-widget category-widget">
    <h4 class="title">Kategori Artikel</h4>
    <ul>
        <?php
                    foreach ($kategori as $kt) {
                        ?>
        <li><a href="#" class="justify-content-between align-items-center d-flex">
                <h6><?php echo $kt->nama ?></h6>
            </a></li>
        <?php
                    }
                ?>
    </ul>
</div>
<?php
}

public function newpost($id)
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

public function kontak()
{
    ?>
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Dhaka, Bangladesh</h5>
                        <p>56/8, West Panthapath</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>00 (880) 9865 562</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>support@codethemes.com</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                                required="" type="text">

                            <input name="email" placeholder="Enter email address"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                                required="" type="text">
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Messege"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                required=""></textarea>
                            <button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
}

}