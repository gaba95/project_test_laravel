@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{ url('empleados/create') }}">Agregar</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
            </td>
            <td>{{$empleado->Nombres}}</td>
            <td>{{$empleado->Apellidos}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
                <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">
                    Editar
                </a>
                 | 
                <form method="POST" action="{{url('/empleados/'.$empleado->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection