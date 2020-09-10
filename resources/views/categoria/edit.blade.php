editar producto.<br>

<form action="{{url('/categoria'.$categoria->id)}}" method="post">

    {{ csrf_field() }}
    {{method_field('PACTH')}}

    <label for="Nombre">{{'nombre'}}</label><br>
    <input type="text" name="nombre" id="nombre" valie="{{$categoria->nombre}}"><br>

    <label for="producto">{{'marca'}}</label><br>
    <input type="text" name="producto" id="producto" valie="{{$categoria->producto}}"><br>

    <label for="categoria">{{'categoria'}}</label><br>
    <input type="text" name="nombre" id="categoria" valie="{{$categoria->categoria}}"><br>

    <label for="precio">{{'precio'}}</label><br>
    <input type="number" name="precio" id="precio" valie="{{$categoria->precio}}"><br>

    <label for="codigo">{{'codigo'}}</label><br>
    <input type="number" name="nombre" id="codigo" valie="{{$categoria->codigo}}"><br> 
  <p>
    <input type="submit" value="Guardar">
    <input type="reset" value="Borrar">
  </p>
</form>