@extends('layouts.app')
@section('title', 'Comics Create')



@section('content')
    <main>
        <section class="container">

            <form action="{{ route('comics.store') }}" method="POST" class="pt-5">
                {{-- token di sicurezza che conterra la mia key per garantire che quello che invio è generato dalla mia pagina --}}
                @csrf
                <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control">
                <input type="text" id="description" name="description" placeholder="inserisci una description"
                    class="form-control">
                <input type="text" id="price" name="price" placeholder="inserisci un price" class="form-control">
                <input type="text" id="type" name="type" placeholder="inserisci un type" class="form-control">
                <button type="submit">invia</button>

            </form>

        </section>

    </main>


@endsection
