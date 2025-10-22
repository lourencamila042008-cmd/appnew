<!DOCTYPE html>
<html lang="en">
<head>
<style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evento</title>
</head>
<body>
    <form class="formulario" action="{{route('boletas.create')}}" method="post">
        @csrf 
        <h1>crear boleta<h1>
        <div>
        <label for="nombre">evento</label>
        <input type="text" name="nombre" placeholder="ingrese nombre del evento">
</div>

<div>
     <label for="localidad">localidad</label>
        <input type="text" name="descripcion" placeholder="ingrese la localidad que desea">
</div>

<div>
    <label for="valor">valor boleta</label>
        <input type="text" name="valor" placeholder="ingrese el valor de la boleta">
</div> 

<div>
    <label for="cantidad">cantidad de boletas</label>
        <input type="text" name="cantidad" placeholder="ingrese la cantidad de boletas">
</div> 
         <button type="submit">crear boleta</button>
</form>


</body>
</html>