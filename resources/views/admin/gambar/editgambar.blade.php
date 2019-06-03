@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Gambar</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editgambar/{{ $galeri->id }}"
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
                                    <input class="form-control" name="judul" value="{{ $galeri->judul }}">
                                </div>
                                <div class="form-group">
                                    <label>Galeri</label>
                                    <select class="form-control" name="kategori">
                                        <option>-- Pilih Galeri --</option>
                                        @foreach($kategori as $k)

                                        @if ($k->id == $galeri->kategorigaleri_id)
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
                        Gambar
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ env('APP_URL') }}/gallery/{{ $galeri->gambar }}" alt="" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ganti Gambar dan Publish
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="hidden" name="image" value="{{ $galeri->gambar }}" />
                                    <input type="file" name="imageedit" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Publish</label>
                                    <select class="form-control" name="publish">
                                        @if ($galeri->publis == 'Y')
                                        <option value="Y" selected>Publish</option>
                                        @elseif ($galeri->publis == 'N')
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Caption
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Caption</label>
                                    <input class="form-control" name="caption" value="{{ $galeri->caption }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-default">Simpan</button>
                <a href="{{ env('APP_URL') }}/admin/listgambar">
                    <button type="button" class="btn btn-default">Kembali</button>
                </a>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop