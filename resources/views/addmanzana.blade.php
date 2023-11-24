<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir una nueva manzana</title>
</head>
<body>

<h1>Añadir una nueva manzana:</h1>

<form action="{{ route('añadirmanzana') }}" method="post">
    @csrf
    <div>
        <label for="tipomanzana">Tipo de manzana</label>
        <input type="text" name="tipomanzana" id="tipomanzana" required>
    </div>
    <div>
        <label for="preciokilo">Precio/Kilo</label>
        <input type="number" name="preciokilo" id="preciokilo" required>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
    
</body>
</html>