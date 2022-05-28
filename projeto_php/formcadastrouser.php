<html lang="pt-br">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h3>Cadastrar novo Sócio</h3>
  <form action="cadastrouser.php" method="POST">
  <div class="form-group">
      <label for="username">Nome:</label>
      <input type="text" class="form-control" id="username" placeholder="Informe seu nome" name="username">
    </div>
  <div class="form-group">
      <label for="useremail">Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Informe seu email" name="useremail">
    </div>
    <div class="form-group">
      <label for="usercel">Celular:</label>
      <input type="text" class="form-control" id="usercel" placeholder="(00)00000-0000" name="usercel">
    </div>
    <div class="form-group">
      <label for="userpassword">Senha:</label>
      <input type="password" class="form-control" id="userpassword" placeholder="Informe sua senha" name="userpassword">
    </div>
    <button type="submit" class="btn btn-default">Cadastrar</button>
    <li> <a href="index.php"> voltar para a pagina inicial </a></li>
  </form>
</div>
</body>
</html>