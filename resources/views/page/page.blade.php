@extends('pagetmp')

@section('main')

@if($link->id == 14)
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-9">
                <h1 class="text-white">
                    BISTECH
                </h1>
                <p class="pt-20 pb-20 text-white">
                    BISTECH STUDIO siap membantu anda dalam pembuatan Website untuk media promosi bisnis anda dan
                    Aplikasi Berbasis Web untuk memudahkan anda dalam menjalankan bisnis anda
                </p>
                <a href="#" class="primary-btn text-uppercase">Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@else
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{ $link->nama }}
                </h1>
            </div>
        </div>
    </div>
</section>
@endif

@if($jmlkontenkanan > 0)
<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                @foreach($kontencenter as $kc)
                {{ KontenHelp::get_konten($kc->modul_id,$kc->konten,$kc->post_id,$kc->kategoripost_id,$kc->page_id,$kc->kategorigaleri_id) }}
                @endforeach
            </div>
            <div class="col-lg-4 sidebar">
                @foreach($kontenkanan as $kk)
                {{ KontenHelp::get_konten($kk->modul_id,$kk->konten,$kk->post_id,$kk->kategoripost_id,$kk->page_id,$kk->kategorigaleri_id) }}
                @endforeach
            </div>
        </div>
    </div>
</section>
@else
@foreach($kontencenter as $kc)
{{ KontenHelp::get_konten($kc->modul_id,$kc->konten,$kc->post_id,$kc->kategoripost_id,$kc->page_id,$kc->kategorigaleri_id) }}
@endforeach
@endif

@stop