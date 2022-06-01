@extends('layouts.layout')

@section('content')
    @forelse ($comics as $comic)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td>
                <td>€ {{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
            </tr>
        </tbody>
    </table>
    @empty
        <h2>Il database è vuoto</h2>
    @endforelse
@endsection




{{-- <h1>{{$comic->title}}</h1> --}}
