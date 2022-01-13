@extends('layouts.default')

@section('page_title', 'comics')


@section('content')

    @include('partials.__search_bar');

    <table>
        <thead>
            <tr>
                <th class="p-3 bg-primary text-white">ID</th>
                <th class="p-3 bg-primary text-white">TITLE</th>
                <th class="p-3 bg-primary text-white">DESCRIPTION</th>
                <th class="p-3 bg-primary text-white">THUMB</th>
                <th class="p-3 bg-primary text-white">PRICE</th>
                <th class="p-3 bg-primary text-white">SERIES</th>
                <th class="p-3 bg-primary text-white">SALEDATE</th>
                <th class="p-3 bg-primary text-white">TYPE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $istance)
                <tr class="border-bottom border-primary">
                    <td class="p-3">{{$istance["id"]}}</td>
                    <td class="p-3">{{$istance["c_title"]}}</td>
                    <td class="p-3">{{$istance["c_description"]}}</td>
                    <td class="p-3"><img class="my-3" src="{{$istance["c_thumb"]}}" alt="{{$istance["c_name"]}}"></td>
                    <td class="p-3">{{$istance["c_price"]}}</td>
                    <td class="p-3">{{$istance["c_series"]}}</td>
                    <td class="p-3">{{$istance["c_saledate"]}}</td>
                    <td class="p-3">{{$istance["c_type"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
