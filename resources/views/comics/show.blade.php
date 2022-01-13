@extends('layouts.default')

@section('page_title', 'comics details')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="image-container text-center">
                    <img src="{{$comic->c_thumb}}" alt="{{$comic->c_title}}">
                </div>
                <h1 class="text-center mt-5 pb-4 border-bottom">{{$comic->id}}   |   {{$comic->c_title}}</h1>
                <p class="pb-4 border-bottom">{{$comic->c_description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    {{$comic->c_series}}
                    <div class="d-flex align-items-center">
                        <h6 class="p-1 mx-3">{{$comic->c_saledate}}</h5>
                        <h6 class="bg-primary text-white p-1 rounded">{{$comic->c_type}}</h6>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="{{route('comics.index')}}" class="">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
