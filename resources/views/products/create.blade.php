<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produto</title>
</head>

<body>
  <h1>Criar Produto</h1>
  <form action="/products/store" method="post">
    @csrf
    <label"> Nome do produto: </label>
      <input type="text" name="name">
      <label"> Descrição do produto: </label>
        <input type="text" name="description">
        <label"> Preço do produto: </label>
          <input type="number" name="price">
          <button type="submit">Enviar</button>
  </form>
</body>

</html>