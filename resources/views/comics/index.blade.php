@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <div class="d-flex justify-content-between align-items-center ">
                <h1>Comics</h1>
                <div>
                    <a href="{{ route('comics.create') }}" class="btn btn-success ">Aggiungi Fumetto</a>
                </div>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-2 mt-5 mb-5">
                        <div class=" thecard p-1 ">
                            <div class="mycard-c">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                            </div>
                            <div class=" mt-2 d-flex flex-column justify-content-between ">
                                <div>
                                    <h5>{{ $comic->title }}</h5>

                                </div>
                                <div class="d-flex justify-content-between align-items-center ">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="mybtn">Scopri</a>

                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger p-1">Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
