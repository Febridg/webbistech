@extends('pagetmp')

@section('main')

<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{ $detailpost->kategoriposts->nama }}
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="<?php echo env('APP_URL') ?>/gallery/<?php echo $detailpost->gambar ?>"
                        alt="">
                    <a href="#">
                        <h1>
                            {{ $detailpost->judul }}
                        </h1>
                    </a>
                    <div class="content-wrap">
                        {!! $detailpost->isi !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar">
                @foreach($kontenkanan as $kk)
                {{ KontenHelp::get_konten($kk->modul_id,$kk->konten,$kk->post_id,$kk->kategoripost_id,$kk->page_id,$kk->kategorigaleri_id) }}
                @endforeach
            </div>
        </div>
    </div>
</section>

@stop