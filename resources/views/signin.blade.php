<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h1>Login:</h1>
  <form action="/login" method="post">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" placeholder="Email">
    <label>Senha:</label>
    <input type="password" name="password" placeholder="senha">
    <button type="submit">Login</button>
  </form>
  <a href="/signup">Registre-se</a>
</body>

</html>