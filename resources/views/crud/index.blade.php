<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    
     <?php echo $name ?> 
     {{-- Estructura para llamar a una variable de php puro --}}
    
    {{ $name }} 

    {{-- El $name no podria ser utilizado sin la extension .blade en el archivo index, ya que forma
    parte de la estructura de blade. En caso de que este archivo no tuviese el .blade no podria ser
    utilizado el {{$name}} --}}

</body>
</html>

