<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de manzanas</title>
</head>
<body>
<table>
<thead>
    <tr>
      <th>ID</th>
      <th>Tipo de manzana</th>
      <th>Precio Kilo</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($manzanas as $manzana)
    <tr>
    <td>{{$manzana->id}}</td>
    <td>{{$manzana->tipoManzana}}</td>
    <td>{{$manzana->precioKilo}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
    
</body>
</html>
