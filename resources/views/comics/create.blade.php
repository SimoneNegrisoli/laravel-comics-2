@extends('layouts.app')
@section('title', 'Comics Create')



@section('content')
    <main>
        <section class="container">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="pt-5 mx-3">
                        <a href="{{ route('comics.index') }}" class="btn btn-info  ">Torna ai fumetti</a>
                    </div>
                    <form action="{{ route('comics.store') }}" method="POST" class="pt-5">
                        {{-- token di sicurezza che conterra la mia key per garantire che quello che invio è generato dalla mia pagina --}}
                        @csrf
                        <div class="mb-3 mx-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input type="text" value="{{ old('title') }}"
                                class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                placeholder="Inserisci titolo" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="mb-3 mx-3">
                            <label for="thumb" class="form-label">Image:</label>
                            <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                                name="thumb" placeholder="insert image url">

                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="price" class="form-label">Prezzo:</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="insert price" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 mx-3">
                            <label for="type" class="form-label">Tipologia:</label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="">All</option>
                                <option value="comic book">comic book</option>
                                <option value="graphic novel">graphic novel</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mx-3 ">Invia</button>
                        <button type="reset" class="btn btn-secondary mx-3 ">Cancella</button>

                    </form>
                </div>
            </div>



        </section>

    </main>


@endsection


{{--


     https://picsum.photos/200/300
    --}}
