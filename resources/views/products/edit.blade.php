<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produto</title>
</head>

<body>
  <h1>Editar Produto</h1>
  <form action="/products/update/{{$product->id}}" method="post">
    @csrf
    <label"> Nome do produto: </label>
      <input type="text" name="name" value="{{$product->name}}">
      <label"> Descrição do produto: </label>
        <input type="text" name="description" value="{{$product->description}}">
        <label"> Preço do produto: </label>
          <input type="number" name="price" value="{{$product->price}}">
          <button type="submit">Enviar</button>
  </form>
  <a href="/products/delete/{{$product->id}}">Deletar Produto</a>
</body>

</html>