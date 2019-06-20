@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Konten</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/addsubmenu"
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
                                        <option>-- Pilih Link --</option>
                                        @foreach($link as $l)
                                        <option value="{{ $l->id }}">{{ $l->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Modul</label>
                                    <select class="form-control" name="menu">
                                        <option>-- Pilih Modul --</option>
                                        @foreach($modul as $m)
                                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Konten</label>
                                    <select class="form-control" name="konten">
                                        <option>-- Pilih Jenis Konten --</option>
                                        <option value="Post">Post</option>
                                        <option value="Kategori Post">Kategori Post</option>
                                        <option value="Page">Page</option>
                                        <option value="Galeri">Galeri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Post</label>
                                    <select class="form-control" name="post">
                                        <option>-- Pilih Post --</option>
                                        @foreach($post as $ps)
                                        <option value="{{ $ps->id }}">{{ $ps->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Post</label>
                                    <select class="form-control" name="kategoripost">
                                        <option>-- Pilih Kategori Post --</option>
                                        @foreach($kategoripost as $kp)
                                        <option value="{{ $kp->id }}">{{ $kp->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Page</label>
                                    <select class="form-control" name="page">
                                        <option>-- Pilih Page --</option>
                                        @foreach($page as $pg)
                                        <option value="{{ $pg->id }}">{{ $pg->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Galeri</label>
                                    <select class="form-control" name="galeri">
                                        <option>-- Pilih Galeri --</option>
                                        @foreach($kategorigaleri as $kg)
                                        <option value="{{ $kg->id }}">{{ $kg->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <select class="form-control" name="posisi">
                                        <option>-- Pilih Posisi --</option>
                                        <option value="Center">Center</option>
                                        <option value="Kanan">Kanan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Order</label>
                                    <input class="form-control" name="orders">
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