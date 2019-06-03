@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Post</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/addpost" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Judul dan Kategori
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input class="form-control" name="judul">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option>-- Pilih Kategori --</option>
                                        @foreach($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Isi Post
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea id="editor" name="isi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gambar Utama dan Publish
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="image" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Publish</label>
                                    <select class="form-control" name="publish">
                                        <option value="N" selected>Draft</option>
                                        <option value="Y">Publish</option>
                                    </select>
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