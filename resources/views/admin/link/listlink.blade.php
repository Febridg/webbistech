@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Link</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Link
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nama Link</th>
                                    <th>Menu</th>
                                    <th>Sub Menu</th>
                                    <th>Posisi</th>
                                    <th>Orders</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($link as $l)
                                <tr class="odd gradeX">
                                    <td>{{ $l->nama }}</td>
                                    <td>{{ $l->webmenus->nama }}</td>
                                    <td>
                                        @if ($l->websubmenu_id == 0)
                                        {{ '-' }}
                                        @else
                                        {{ $l->websubmenus->nama }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($l->posisi == 'atas1')
                                        {{ 'Atas Satu' }}
                                        @elseif ($l->posisi == 'atas2')
                                        {{ 'Atas Dua' }}
                                        @endif
                                    </td>
                                    <td>{{ $l->orders }}</td>
                                    <td class="center">
                                        <a href="{{ env('APP_URL') }}/admin/editlink/{{ $l->id }}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i>
                                                Edit</button>
                                        </a>
                                        <a href="{{ env('APP_URL') }}/admin/aksi/deletelink/{{ $l->id }}">
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