@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Konten</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Konten
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Link</th>
                                    <th>Modul</th>
                                    <th>Jenis Konten</th>
                                    <th>Posisi</th>
                                    <th>Orders</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($konten as $k)
                                <tr class="odd gradeX">
                                    <td>{{ $k->links->nama }}</td>
                                    <td>{{ $k->moduls->nama }}</td>
                                    <td>{{ $k->konten }}</td>
                                    <td>{{ $k->posisi }}</td>
                                    <td>{{ $k->orders }}</td>
                                    <td class="center">
                                        <a href="{{ env('APP_URL') }}/admin/editkonten/{{ $k->id }}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i>
                                                Edit</button>
                                        </a>
                                        <a href="{{ env('APP_URL') }}/admin/aksi/deletekonten/{{ $k->id }}">
                                            <button class="btn btn-danger"><i class="icon-remove icon-white"></i>
                                                Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@stop