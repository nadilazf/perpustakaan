@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$title}}</h2>
                <img src="{{ $image }}" width="200">
            </div>
        </div>
    </div>
@endsection