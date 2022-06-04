@extends('layouts.layout')

@section('content')

{{-- Alert di conferma modifica di un record --}}
@if (session('message'))
<div class="alert alert-warning">
    {{session('message')}}
</div>
@endif

<div class="container mt-4 text-center d-flex flex-column align-self-center justify-content-center">

    <h1 class="text-primary text-center m-3 fs-3 lead fw-bold">{{$comic->title}}</h1>
    <div class="d-flex justify-content-center m-5">
        <img src="{{$comic->thumb}}" alt="cover">
        <p class="w-50 m-3 lead">{{$comic->description}}</p>
    </div>
    
    <div class="m-5">
        <h4 class="lead"> <span class="text-primary">#id nel database: </span> {{$comic->id}}</h4>
        <h4 class="lead"> <span class="text-primary">Prezzo: </span> €{{$comic->price}}</h4>
        <h4 class="lead"> <span class="text-primary">Serie: </span> {{$comic->series}}</h4>
        <h4 class="lead"> <span class="text-primary">Data di uscita: </span> {{$comic->sale_date}}</h4>
        <h4 class="lead"> <span class="text-primary">Tipo pubblicazione: </span> {{$comic->type}}</h4>
        <a href="{{route('comics.index')}}" type="button" class="btn btn-outline-primary w-25 m-5">Back</a>
    </div>


</div>

@endsection