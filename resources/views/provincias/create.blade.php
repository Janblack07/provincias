<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{url('/provincias')}}" method="post" class="p-4">
    @csrf
  <div class="mb-3">
     <label class="form-label">Cantones</label>
    <input type="text" class="form-control"  name="cantones" placeholder="nombre de la provincia">
   
</select>
  </div>
  <div class="mb-3">
    <label class="form-label">Codigo</label>
    <input type="text" class="form-control"  name="codigo" placeholder="codigo">
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Crear</button>
  </div>
  
</form>
</body>
</html>