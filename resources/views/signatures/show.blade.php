@extends('layout.app')

@section('meta_title')
    <title>Data {{$name}}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12"><signature-item :signature="{{$signature}}"></signature-item></div>
        </div>
    </div>
@endsection