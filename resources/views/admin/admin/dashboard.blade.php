@extends('admin.admin.layout.app')

@section('title','Admin Paneli')

@section('sidebar-title','Admin Paneli')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Paralar</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Ad</th>
                    <th>Alış</th>
                    <th>Satış</th>
                    <th>Degişim</th>
                    <th>Katsayı</th>
                    <th>işlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->name}}({{$row->code}})</td>
                        <td>{{$row->buying}}</td>
                        <td>{{$row->selling}}</td>
                        <td>{{$row->change}}</td>
                        <td>{{$row->factor}}</td>
                        <td>
                            <a href="{{route('admin.detail',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

@endsection

@section('js')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script !src="">
        $(document).ready( function () {
            $('#example1').DataTable();
        } );
    </script>
@endsection
