<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evento</title>
</head>
<body>
    <form class="formulario" action="{{route('artistas.create')}}" method="post">
        @csrf 
        <h1>crear artista<h1>
        <div>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" placeholder="ingrese el nombre del artista">
</div>

<div>
     <label for="apellido">apellido</label>
        <input type="text" name="apellido" placeholder="ingrese el apellido del artista">
</div>

<div>
    <label for="genero">genero musical</label>
        <input type="text" name="genero" placeholder="ingrese el genero musical del artista">
</div> 

<div>
    <label for="ciudad">ciudad natal</label>
        <input type="text" name="ciudad" placeholder="ingrese la ciudad natal">
</div> 
         <button type="submit">crear artista</button>
</form>


</body>
</html>