seccion de edicion de empleados
<form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <label for="Nombres">{{'Nombres'}}</label>
    <input type="text" name="Nombres" id="Nombres" value="{{$empleado->Nombres}}">
    <br/>
    <label for="Apellidos">{{'Apellidos'}}</label>
    <input type="text" name="Apellidos" id="Apellidos" value="{{$empleado->Apellidos}}">
    <br/>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="{{$empleado->Correo}}">
    <br/>
    <label for="Foto">{{'Foto'}}</label>
    {{$empleado->Foto}}
    <br/>
    <input type="file" name="Foto" id="Foto" value="">
    <br/>
    <input type="submit" value="Editar">
    <a href="{{ url('empleados/create') }}">Regresar</a>
</form>
