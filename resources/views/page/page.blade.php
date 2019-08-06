@extends('pagetmp')

@section('main')
@if ($newsticker->count() >= 1 )
{{ KontenHelp::get_konten(3,0,0,0,0,0) }}
@endif

@if ($featurepost->count() >= 1 )
{{ KontenHelp::get_konten(4,0,0,0,0,0) }}
@endif

<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                @foreach($kontencenter as $kc)
                {{ KontenHelp::get_konten($kc->modul_id,$kc->konten,$kc->post_id,$kc->kategoripost_id,$kc->page_id,$kc->kategorigaleri_id) }}
                @endforeach
            </div>

            <div class="col-md-10 col-lg-4">
                @foreach($kontenkanan as $kk)
                {{ KontenHelp::get_konten($kk->modul_id,$kk->konten,$kk->post_id,$kk->kategoripost_id,$kk->page_id,$kk->kategorigaleri_id) }}
                @endforeach
            </div>
        </div>
    </div>
</section>
@stop