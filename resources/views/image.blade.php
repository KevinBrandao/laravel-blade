<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagen</title>
</head>
<body>
    <form action="/images" method="post" enctype="multipart/form-data">
        @csrf
        <label for="conteudo">Enviar imagem 1:</label>
        <input type="file" name="image" accept="images/*">  <br>
        <label for="conteudo">Enviar imagem 2:</label> 
        <input type="file" name="image" accept="images/*">  <br><br><br>
          <button type="submit">Enviar imagem 1 e 2</button>
     </form>
</body>
</html>