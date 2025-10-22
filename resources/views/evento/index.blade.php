<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evento</title>
</head>
<body>
    <form class="formulario" action="{{route('evento.create')}}" method="post">
        @csrf 
        <h1>crear evento<h1>
        <div>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" placeholder="ingrese nombre del evento">
</div>

<div>
     <label for="descripcion">nombre</label>
        <input type="text" name="descripcion" placeholder="ingrese la descripcion del evento">
</div>

<div>
    <label for="fecha y hora inicio">fecha y hora inicio</label>
        <input type="datetime" name="fecha y hora inicio" placeholder="ingrese la fecha y hora de inicio del evento">
</div> 

<div>
    <label for="fecha y hora fin">fecha y hora fin</label>
        <input type="datetime" name="fecha y hora fin" placeholder="ingrese la fecha y hora final del evento">
</div> 
         <button type="submit">crear evento</button>
</form>


</body>
</html>