<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="{{url('/provincias/'.$provincias->id)}}"class="p-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label  class="form-label">Nombre de la provincia </label>
          <input type="text" name='cantones' class="form-control" value="{{$provincias->cantones}}">
        </div>
        <div class="mb-3">
          <label  class="form-label">codigo </label>
          <input type="text" name='codigo' class="form-control"  value="{{$provincias->codigo}}">
        </div>

        <button type="submit" class="btn btn-primary">actualizar</button>
      </form>
</body>
</html>