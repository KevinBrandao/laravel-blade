<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/document" method="post" enctype="multipart/form-data">
        @csrf
        {{$doc}}
        <label for="conteudo">Enviar Documento</label>
        <input type="file" name="document" accept="{{$doc}}/*">    
          <button type="submit">Enviar imagem</button>
     </form>
</body>
</html>