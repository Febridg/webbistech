@extends('admintmp')

@section('main')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Page</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Page
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Publish</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($page as $p)
                                <tr class="odd gradeX">
                                    <td>{{ $p->judul }}</td>
                                    <td>
                                        @if ($p->publis == 'Y')
                                        <p>Publish</p>
                                        @elseif ($p->publis == 'N')
                                        <p>Draft</p>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a href="{{ env('APP_URL') }}/admin/editpage/{{ $p->id }}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i>
                                                Edit</button>
                                        </a>
                                        <a href="{{ env('APP_URL') }}/admin/aksi/deletepage/{{ $p->id }}">
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