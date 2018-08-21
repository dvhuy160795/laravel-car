@extends('layouts.layout')

@section("content")
    <div class="col-md-12">
        <ul class="nav nav-pills">
            @foreach ($data_tab as $key=>$tab)
                
                <li class="nav-item">
                  <a class="nav-link @if($key == 1)
                    active
                @endif" data-toggle="pill" href="#{{ $key }}">Sản phẩm</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-12" style="height: 30px"></div>
    <div class="col-md-12">
        <div class="tab-content">
            @foreach ($data_tab as $key=>$tab)
                {!! $tab !!}
            @endforeach
        </div>
    </div>
@endsection