@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Link</h1>
        </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="{{ env('APP_URL') }}/admin/aksi/editlink/{{ $link->id }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Menu
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Menu</label>
                                    <input class="form-control" name="nama" value="{{ $link->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>Menu</label>
                                    <select class="form-control" name="menu">
                                        @foreach($webmenu as $wm)
                                        @if ($link->webmenu_id == $wm->id)
                                        <option value="{{ $wm->id }}" selected>{{ $wm->nama }}</option>
                                        @else
                                        <option value="{{ $wm->id }}">{{ $wm->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Menu</label>
                                    <select class="form-control" name="submenu">
                                        @if ($link->websubmenu_id == 0)
                                        <option value="0" selected>-</option>
                                        @endif
                                        @foreach($websubmenu as $ws)
                                        @if ($link->websubmenu_id == $ws->id)
                                        <option value="{{ $ws->id }}" selected>{{ $ws->nama }}</option>
                                        @else
                                        <option value="{{ $ws->id }}">{{ $ws->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <select class="form-control" name="posisi">
                                        <option>-- Pilih Posisi --</option>
                                        @if ($link->posisi == 'atas1')
                                        <option value="atas1" selected>Atas Satu</option>
                                        <option value="atas2">Atas Dua</option>
                                        @elseif ($link->posisi == 'atas2')
                                        <option value="atas1">Atas Satu</option>
                                        <option value="atas2" selected>Atas Dua</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Order</label>
                                    <input class="form-control" name="orders" value="{{ $link->orders }}">
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