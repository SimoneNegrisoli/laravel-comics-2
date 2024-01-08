@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $key => $comic)
                    <div class="col-12 col-md-2 mt-5 mb-5">
                        <div class=" thecard  ">
                            <div class="mycard-c">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            </div>
                            <div class=" mt-2 d-flex flex-column justify-content-between ">
                                <div>
                                    <h5>{{ $comic['title'] }}</h5>

                                </div>
                                <div>
                                    <a href="{{ route('comics.show', $key) }}" class="mybtn">Scopri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
