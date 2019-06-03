@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Page</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editpage/{{ $page->id }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Judul
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input class="form-control" name="judul" value="{{ $page->judul }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Isi Page
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea id="editor" name="isi">{{ $page->isi }}</textarea>
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="hidden" name="image" value="{{ $page->gambar }}" />
                                    <input type="file" name="imageedit" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Publish</label>
                                    <select class="form-control" name="publish">
                                        @if ($page->publis == 'Y')
                                        <option value="Y" selected>Publish</option>
                                        @elseif ($page->publis == 'N')
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
                <a href="{{ env('APP_URL') }}/admin/listpage">
                    <button type="button" class="btn btn-default">Kembali</button>
                </a>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop