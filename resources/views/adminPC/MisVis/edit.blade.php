@extends('layout.admin')

@section('content')
<h3>ACTUALIZAR MISIÓN Y VISIÓN</h3>
<form action="/updateMisVis/{{$editMisVis->image}}" method="post">
    @csrf
    @method('put')
    <label for="texto">Contenido</label><br>
    <textarea type="text" name="texto" id="texto">{{$editMisVis->texto}}</textarea><br>

    <label for="image">Imagen</label><br>
    <input value="{{$editMisVis->image}}" type="file" name="image" id="image"><br><br>
    <figure class="figure-img">
        <img src="{{asset('imagen/'.$editMisVis->image)}}" alt="Imagen actual">
    </figure>
        
    <hr>
    <button type="submit">Actualizar</button>
</form>
@endsection