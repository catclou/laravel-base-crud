@extends('layouts.layout')

@section('content')

    <div class="container-fluid">
        <h3 class="lead fw-bold text-primary fs-3 text-center p-5 mt-5">Modifica un record nel database</h3>

        {{-- Visualizzazione errori validazione --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="m-4">
            {{-- Form per inserire i dati nell'entità --}}
            <form action="{{route('comics.update', $comic->id)}}" method="POST" class="w-100 row-cols-2 g-3 d-flex flex-column align-content-center justify-content-center flex-wrap mx-auto">

                @csrf

                {{-- aggiungo il metodo --}}
                @method('PUT')

                <div class="row g-2">

                    {{-- input titolo --}}
                    <div class="w-100">
                        <div class="form-floating">
                            <input type="text" required class="form-control" id="title" placeholder="" value="{{$comic->title}}" name="title">
                            <label for="title">Titolo</label>
                        </div>
                    </div>

                    <div class="col-md">
                        {{-- <div class="form-floating">
                            <select class="form-select" id="type">
                                <option value="comic book">Comic book</option>
                                <option value="graphic novel">Graphic novel</option>
                            </select>
                            <label for="floatingSelectGrid">Tipo di pubblicazione</label>
                        </div> --}}
                    </div>
                
                    {{-- input descrizione --}}
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" required placeholder="Leave a comment here" value="{{$comic->description}}"  name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descrizione</label>
                            </div>
                        </div>
                    </div>

                    {{-- input link cover --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" required class="form-control" name="thumb" id="title" placeholder="" value="{{$comic->thumb}}">
                            <label for="title">Link copertina</label>
                        </div>
                    </div>

                    {{-- input prezzo --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="number" required name="price" step="0.01" class="form-control" id="title" placeholder="" value="{{$comic->price}}">
                            <label for="title">Prezzo</label>
                        </div>
                    </div>

                    {{-- input link cover --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" required class="form-control" name="series" id="title" placeholder="" value="{{$comic->series}}">
                            <label for="title">Series</label>
                        </div>
                    </div>

                    <div class="row g-2">

                        {{-- input data di pubblicazione --}}
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="date" required class="form-control" name="sale_date" id="title" placeholder="" value="{{$comic->sale_date}}" >
                                <label for="title">Data di pubblicazione</label>
                            </div>
                        </div>

                        {{-- input tipo di pubblicazione --}}
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" required id="type" name="type" value="{{$comic->type}}" >
                                    <option value="comic book">Comic book</option>
                                    <option value="graphic novel">Graphic novel</option>
                                </select>
                                <label for="floatingSelectGrid">Tipo di pubblicazione</label>
                            </div>
                        </div>

                        

                    </div>

                </div>

                <input class="btn btn-primary mt-5 w-25 align-self-center" type="submit" value="Submit">

            </form>
        </div>

    </div>

@endsection