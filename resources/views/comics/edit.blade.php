@extends('layouts.default')

@section('page_title', 'create')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="text-primary text-center mb-3">Update comics: {{$comic->c_title}}</h3>
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('put')


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics title</span>
                        <input value="{{ $comic->c_title }}" id="input-title" name="c_title"
                        type="text" class="form-control" placeholder="Enter new comics title">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Comics description</span>
                        <textarea value="" id="input-description" name="c_description"
                        class="form-control" aria-label="With textarea">{{ $comic->c_description }}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics image thumb</span>
                        <input value="{{ $comic->c_thumb }}" id="input-thumb" name="c_thumb"
                        type="text" class="form-control" placeholder="Enter new comics thumb">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Comics price</span>
                        <input value="{{ $comic->c_price }}" id="input-price" name="c_price" type="number" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics series</span>
                        <input value="{{ $comic->c_series }}" id="input-series" name="c_series" type="text" class="form-control" placeholder="Enter new comics series" >
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics type</span>
                        <input value="{{ $comic->c_type }}" id="input-type" name="c_type" type="text" class="form-control" placeholder="Enter new comics type" >
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




