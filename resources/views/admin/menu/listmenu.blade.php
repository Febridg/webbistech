@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Menu</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Menu
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($webmenu as $wm)
                                <tr class="odd gradeX">
                                    <td>{{ $wm->nama }}</td>
                                    <td class="center">
                                        <a href="{{ env('APP_URL') }}/admin/editmenu/{{ $wm->id }}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i>
                                                Edit</button>
                                        </a>
                                        <a href="{{ env('APP_URL') }}/admin/aksi/deletemenu/{{ $wm->id }}">
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