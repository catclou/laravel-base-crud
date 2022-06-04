@extends('layouts.layout')

@section('content')

    {{-- Alert di conferma eliminazione di un record --}}
    @if (session('message'))
        <div class="alert alert-warning">
            {{session('message')}}
        </div>
    @endif

    {{-- Intestazione fissa della tabella --}}
    <table class="table">
        <thead class="table-success">
            <tr>
                <th scope="col">Thumb</th>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

    {{-- Ciclo per stampare tutte le informazioni --}}
    
    <tbody>

    @forelse ($comics as $comic)

        <tr>
            <td> <img src="{{$comic->thumb}}" class="w-100" alt="cover"> </td>
            <th scope="row">{{$comic->id}}</th>
            <td class="fw-bold">{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>€{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>

                {{-- button della show --}}
                <a type="button" href="{{route('comics.show', $comic->id)}}" class="btn btn-outline-info rounded rounded-circle m-1"><i class="fa-solid fa-eye"></i></a>

                {{-- button della edit --}}
                <a type="button" href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-warning rounded rounded-circle m-1"><i class="fa-solid fa-pen-to-square"></i></a>

                {{-- form + button della destroy --}}
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf

                    {{-- uso il metodo Delete --}}
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger rounded rounded-circle m-1"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </td>
        </tr>

    @empty
    <h2>Il database è vuoto</h2>
    @endforelse

    </tbody>


    </table>
    
@endsection

