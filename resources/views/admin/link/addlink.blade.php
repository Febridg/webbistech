@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Link</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/addlink" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Link
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Link</label>
                                    <input class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Menu</label>
                                    <select class="form-control" name="menu">
                                        <option>-- Pilih Menu --</option>
                                        @foreach($webmenu as $wm)
                                        <option value="{{ $wm->id }}">{{ $wm->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Menu</label>
                                    <select class="form-control" name="submenu">
                                        <option>-- Pilih Sub Menu --</option>
                                        @foreach($websubmenu as $ws)
                                        <option value="{{ $ws->id }}">{{ $ws->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <select class="form-control" name="posisi">
                                        <option>-- Pilih Posisi --</option>
                                        <option value="atas1">Atas Satu</option>
                                        <option value="atas2">Atas Dua</option>
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

            <div class=" col-lg-12">
                <button type="submit" class="btn btn-default">Simpan</button>
            </div>
        </form>
        <div lass="col-lg-12">&nbsp;</div>
    </div>

</div>
@stop