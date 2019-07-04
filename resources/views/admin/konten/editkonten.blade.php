@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Konten</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editkonten/{{ $konten->id }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Konten
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Link</label>
                                    <select class="form-control" name="link">
                                        @foreach($link as $l)
                                        @if ($konten->link_id == $l->id)
                                        <option value="{{ $l->id }}" selected>{{ $l->nama }}</option>
                                        @else
                                        <option value="{{ $l->id }}">{{ $l->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Modul</label>
                                    <select class="form-control" name="modul">
                                        @foreach($modul as $m)
                                        @if ($konten->modul_id == $m->id)
                                        <option value="{{ $m->id }}" selected>{{ $m->nama }}</option>
                                        @else
                                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Konten</label>
                                    <select class="form-control" name="konten">
                                        <option value="{{ $konten->konten }}" selected>{{ $konten->konten }}</option>
                                        <option value="Post">Post</option>
                                        <option value="Kategori Post">Kategori Post</option>
                                        <option value="Page">Page</option>
                                        <option value="Galeri">Galeri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Post</label>
                                    <select class="form-control" name="post">
                                        @if ($konten->post_id == 0)
                                        <option value="0" selected>-</option>
                                        @endif
                                        @foreach($post as $ps)
                                        @if ($konten->post_id == $ps->id)
                                        <option value="{{ $ps->id }}" selected>{{ $ps->nama }}</option>
                                        @else
                                        <option value="{{ $ps->id }}">{{ $ps->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Post</label>
                                    <select class="form-control" name="kategoripost">
                                        @if ($konten->kategoripost_id == 0)
                                        <option value="0" selected>-</option>
                                        @endif
                                        @foreach($kategoripost as $kp)
                                        @if ($konten->kategoripost_id == $kp->id)
                                        <option value="{{ $kp->id }}" selected>{{ $kp->nama }}</option>
                                        @else
                                        <option value="{{ $kp->id }}">{{ $kp->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Page</label>
                                    <select class="form-control" name="page">
                                        @if ($konten->page_id == 0)
                                        <option value="0" selected>-</option>
                                        @endif
                                        @foreach($page as $pg)
                                        @if ($konten->page_id == $pg->id)
                                        <option value="{{ $pg->id }}" selected>{{ $pg->nama }}</option>
                                        @else
                                        <option value="{{ $pg->id }}">{{ $pg->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Galeri</label>
                                    <select class="form-control" name="galeri">
                                        @if ($konten->kategorigaleri_id == 0)
                                        <option value="0" selected>-</option>
                                        @endif
                                        @foreach($kategorigaleri as $kg)
                                        @if ($konten->kategorigaleri_id == $kg->id)
                                        <option value="{{ $kg->id }}" selected>{{ $kg->nama }}</option>
                                        @else
                                        <option value="{{ $kg->id }}">{{ $kg->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <select class="form-control" name="posisi">
                                        <option value="{{ $konten->posisi }}" selected>{{ $konten->posisi }}</option>
                                        <option value="Center">Center</option>
                                        <option value="Kanan">Kanan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Order</label>
                                    <input class="form-control" name="orders" value="{{ $konten->orders }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-default">Simpan</button>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop