@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <h1>Most popular</h1>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between  ">
                        @foreach ($comics as $comic)
                            <div class="mycomic-home">
                                <h6>{{ $comic->title }}</h6>
                                <div class="my-img-c">
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </section>
    </main>
@endsection
