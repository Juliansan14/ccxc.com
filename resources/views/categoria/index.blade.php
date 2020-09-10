inicio(lista datos)<br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>nombre</th>
            <th>marca</th>
            <th>categoria</th>
            <th>precio</th>
            <th>codigo</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categoria as $categoria)
        <tr>
            <td>{{loop->iteration}}</td>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->marca}}</td>
            <td>{{$categoria->categoria}}</td>
            <td>{{$categoria->precio}}</td>
            <td>{{$categoria->codigo}}</td>
            <td>
                <a href="{{url('/categoria/'.$categoria->id.'/edit')}}"> Editar</a>
                 | 
                <form method="post" action="{{url('/categoria/'.$catergoria->id) }}" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿seguro que quiere borrar?');">borrar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
