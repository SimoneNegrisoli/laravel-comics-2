@extends('layouts.app')
@section('title', 'Comics')



@section('content')
    <main>
        <section class="container" id="comics-show">
            <div class="d-flex justify-content-between align-items-center ">
                <h1>{{ $comic->title }}</h1>

                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link ">Modifica prodotto</a>

            </div>
            <div class="row gy-4">

                <div class="col-12">
                    <div class=" d-flex  flex-column  justify-content-between  align-items-center ">
                        <div>
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">
                        </div>
                        <div class="card-body mt-3 ">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <div class="card-text mt-3 ">{!! $comic->description !!}</div>
                        </div>
                    </div>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary ">Torna ai fumetti</a>
                </div>


            </div>

        </section>

    </main>


@endsection
