@extends('layouts.default')

@section('page_title', 'create')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="text-primary text-center mb-3">Add new comics:</h3>
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics title</span>
                        <input id="input-title" name="input-title" type="text" class="form-control" placeholder="Enter new comics title" >
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Comics description</span>
                        <textarea id="input-description" name="input-description" class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics image thumb</span>
                        <input id="input-thumb" name="input-thumb" type="text" class="form-control" placeholder="Enter new comics thumb" >
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Comics price</span>
                        <input id="input-price" name="input-price" type="number" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics series</span>
                        <input id="input-series" name="input-series" type="text" class="form-control" placeholder="Enter new comics series" >
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Comics type</span>
                        <input id="input-type" name="input-type" type="text" class="form-control" placeholder="Enter new comics type" >
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




