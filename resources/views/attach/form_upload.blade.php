@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Ảnh hệ thống</h2>
    <div>
        <form action="{{URL::to('Admin/SaveFile.html')}}" id="uploadAttachment" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="file" name="attachment">
            <hr>
            <input class="form-control" type="submit" name="addFile" value="Tải ảnh">
        </form>
    </div>
  </div>
@endsection
