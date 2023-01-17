<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <h1>Tabla de las cantones</h1>
        
        <a href="{{url('/provincias/create')}}" class="btn btn-primary">ingresar cantones</a>
        <hr>
        <table class="table table-secondary table-striped  table-hover border-dark text-center  table-sm ">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nombre del canton</th>
                <th scope="col">codigo</th>
                <th scope="col">acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($provincias as $item)
                    <tr>
                        <th scope="row"> {{$item->id}} </th>
                        <td>{{$item->cantones}}</td>
                        <td>{{$item->codigo}}</td>
                        
                        <td class=" d-flex justify-content-center ">
                            <a href="{{url('/provincias/'.$item->id)}}" class="btn btn-info ">editar</a>
                            <form action="
                            {{url('/provincias/'.$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        
                        <button  type='submit' class="btn btn-danger mx-2 ">eliminar</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>