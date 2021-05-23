
@extends('admin.admin.layout.app')

@section('title','Admin Paneli')

@section('sidebar-title','Admin Paneli')
@section('content')
<div class="col-md-12 flex-row my-2">
    <div class="col-md-12">
        <p><b>Ad:</b> {{$row->name}}({{$row->code}})</p>
        <p><b>Alış:</b> {{$row->buying}}</p>
        <p><b>Satış:</b> {{$row->selling}}</p>
        <p><b>Degişim:</b> {{$row->change}}</p>
    </div>
    <div class="col-md-12">
        <form method="post" action="{{route('admin.detail.post',['id'=>$row->id])}}">
            @csrf
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Katsayı</label>
                <div class="col-md-8">
                    <input  name=factor type="number" step="0.001" value="{{$row->factor}}" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-8">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success pull-right">Kaydet</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('css')
@endsection

@section('js')
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

@endsection


