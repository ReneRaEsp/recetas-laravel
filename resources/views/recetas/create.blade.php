@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css"
        integrity="sha512-An9xk8CstwPHW2Vzjj0RA6Gdbi3RUkEMqocdnEtq2C/iKJLKV0JGaJTMgyn2HeolVe0zDtDhXP7OMaTSffCkqw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-primary mr-2 text-light"> Volver </a>
@endsection

@section('content')

    <h2 class="text-center mb-5"> Crear Nueva Receta </h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" novalidate action="{{ route('recetas.store') }}">
                @csrf
                <div class="form-group">
                    <label for="titulo"> Titulo Receta </label>

                    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        placeholder="Titulo Receta" value={{ old('titulo') }}>
                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror">
                        <option value="">---Seleccione---</option>
                        @foreach ($categorias as $id => $categoria)
                            <option value="{{ $id }}" {{ old('categoria') == $id ? 'selected' : '' }}>
                                {{ $categoria }} </option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert"> {{ $message }} </span>
                    @enderror

                </div>

                <div class="form-group mt-3">
                    <label for="ingredientes"> Ingredientes </label>
                    <input id="ingredientes" type="hidden" name="ingredientes" value="{{ old('ingredientes') }}">
                    <trix-editor name="editor" class="trix-content form-control @error('ingredientes') is-invalid @enderror" input="ingredientes"></trix-editor>

                    @error('ingredientes')
                        <span class="invalid-feedback d-block" role="alert"> {{ $message }} </span>
                    @enderror

                </div>
                <div class="form-group mt-3">
                    <label for="preparacion"> Preparacion </label>
                    <input id="preparacion" type="hidden" name="preparacion" value="{{ old('preparacion') }}">
                    <trix-editor name="editor" class="trix-content form-control @error('preparacion') is-invalid @enderror" input="preparacion"></trix-editor>

                    @error('preparacion')
                        <span class="invalid-feedback d-block" role="alert"> {{ $message }} </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Receta " />
                </div>

            </form>
        </div>
    </div>



@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"
        integrity="sha512-DYqCX8kO/IP/uf6iT0+LnI6ft5aDdONwabmbgVxjR94pwCefuJwYwd+NAsKFpH3hk8wP2L3jRn9g61t3r2N9VA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
