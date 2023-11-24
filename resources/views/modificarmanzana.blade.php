<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar o Eliminar manzana</title>
</head>
<body>

<h1>Modificar o Eliminar manzana:</h1>

<form action="{{ route('postmodmanzana') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$manzana->id}}">
    <div>
        <label for="tipomanzana">Tipo de manzana</label>
        <input type="text" name="tipomanzana" id="tipomanzana" required value="{{$manzana->tipomanzana}}">
    </div>
    <div>
        <label for="preciokilo">Precio/Kilo</label>
        <input type="number" name="preciokilo" id="preciokilo" required value="{{$manzana->preciokilo}}">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
<form action="{{ route('eliminarmanzana') }}" method="post">
@csrf
    <input type="hidden" name="id" value="{{$manzana->id}}">
    <input type="submit" value="ELIMINAR">
</form>
    
</body>
</html>