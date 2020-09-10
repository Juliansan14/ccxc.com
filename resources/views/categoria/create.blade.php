
Crear producto.<br>

<form action="{{url('/categoria')}}" method="post">

    {{ csrf_field() }}

    <label for="Nombre">{{'nombre'}}</label><br>
    <input type="text" name="nombre" id="nombre" valie=""><br>

    <label for="producto">{{'marca'}}</label><br>
    <input type="text" name="producto" id="producto" valie=""><br>

    <label for="categoria">{{'categoria'}}</label><br>
    <input type="text" name="nombre" id="categoria" valie=""><br>

    <label for="precio">{{'precio'}}</label><br>
    <input type="number" name="precio" id="precio" valie=""><br>

    <label for="codigo">{{'codigo'}}</label><br>
    <input type="number" name="nombre" id="codigo" valie=""><br> 
  <p>
    <input type="submit" value="Guardar">
    <input type="reset" value="Borrar">
  </p>
</form>