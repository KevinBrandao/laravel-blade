<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    @if ($energy > 8000){
        <h1>"Mais de 8000!" {{$energy }} </h1>
    }
    @else($energy <8000){
      <h1>  "Inseto!" {{ $energy }}
    }

    @endif
</body>
</html>