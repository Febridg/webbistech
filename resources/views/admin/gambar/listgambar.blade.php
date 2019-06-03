@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Gambar</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Gambar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Galeri</th>
                                    <th>Gambar</th>
                                    <th>Author</th>
                                    <th>Publish</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galeri as $g)
                                <tr class="odd gradeX">
                                    <td>{{ $g->judul }}</td>
                                    <td><img src="{{ env('APP_URL') }}/gallery/{{ $g->gambar }}" alt="" width="100" />
                                    </td>
                                    <td>{{ $g->kategorigaleris->nama }}</td>
                                    <td>{{ $g->author }}</td>
                                    <td>
                                        @if ($g->publis == 'Y')
                                        <p>Publish</p>
                                        @elseif ($g->publis == 'N')
                                        <p>Draft</p>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a href="{{ env('APP_URL') }}/admin/editgambar/{{ $g->id }}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i>
                                                Edit</button>
                                        </a>
                                        <a href="{{ env('APP_URL') }}/admin/aksi/deletegambar/{{ $g->id }}">
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