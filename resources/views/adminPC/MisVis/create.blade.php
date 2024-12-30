@extends('layout.admin')

@section('content')
    <h2>INGRESAR MISIÓN Y VISIÓN</h2>
    <form action="/storeMisVis" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label for="texto">Contenido</label><br>
        <textarea name="texto" id="texto" type="text" required></textarea><br>

        <label for="image">Imagen</label><br>
        <input name="image" id="image" type="file" required><br>
        <hr>
        <button type="submit">GUARDAR</button>
    </form>
@endsection