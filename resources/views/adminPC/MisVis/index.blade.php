@extends('layout.admin')

@section('content')
    <div class="table-h2">
        <h2>Listado de Misión y Visión</h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/createMisVis"><button type="button" class="btn btn-success">Ingresar</button></a>
            <a href="/MisVisD"><button type="button" class="btn btn-secondary">Desactivados</button></a>
        </div>
        <div class="tabla">
            <table class="table">
                <thead>
                    <tr>
                    <th class="id" scope="col">#</th>
                    <th class="opc-tb" scope="col">Contenido</th>
                    <th class="opc-tb" scope="col">Imagen</th>
                    <th class="opc-tb" scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getMisVis as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->texto}}</td>
                        <td>
                            <figure class="figure-img">
                                <img src="{{asset('imagen/'.$item->image)}}" alt="Imagen actual">
                            </figure>
                        </td>
                        <td class="botones">
                            <a href="/editMisVis/{{$item->id}}"><button type="button" class="btn btn-primary">Actualizar</button></a>
                            <a href="/statusMisVis/{{$item->id}}"><button class="btn btn-danger" type="submit">Desactivar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection