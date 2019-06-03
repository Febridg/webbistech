@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Post</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editpost/{{ $post->id }}"
            enctype="multipart/form-data">
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
                                    <input class="form-control" name="judul" value="{{ $post->judul }}">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option>-- Pilih Kategori --</option>
                                        @foreach($kategori as $k)

                                        @if ($k->id == $post->kategoripost_id)
                                        <option value="{{ $k->id }}" selected>{{ $k->nama }}</option>
                                        @else
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                        @endif

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
                                    <textarea id="editor" name="isi">{{ $post->isi }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gambar Utama
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="hidden" name="image" value="{{ $post->gambar }}" />
                                    <input type="file" name="imageedit" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Publish</label>
                                    <select class="form-control" name="publish">
                                        @if ($post->publis == 'Y')
                                        <option value="Y" selected>Publish</option>
                                        @elseif ($post->publis == 'N')
                                        <option value="N" selected>Draft</option>
                                        @endif
                                        <option value="N">Draft</option>
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
                <a href="{{ env('APP_URL') }}/admin/listpost">
                    <button type="button" class="btn btn-default">Kembali</button>
                </a>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop