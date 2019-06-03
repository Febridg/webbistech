@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Galeri</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editkategorigambar/{{ $kategori->id }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nama Galeri
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Galeri</label>
                                    <input class="form-control" name="nama" value="{{ $kategori->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-default">Simpan</button>
                <a href="{{ env('APP_URL') }}/admin/listkategorigambar">
                    <button type="button" class="btn btn-default">Kembali</button>
                </a>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop