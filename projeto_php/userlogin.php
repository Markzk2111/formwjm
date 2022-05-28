<html lang="pt-br">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h3>Informe seu login e senha para acessar a plataforma</h3>
  <form action="validauser.php" method="POST">
    <div class="form-group">
      <label for="useremail">Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Informe seu email" name="useremail">
    </div>
    <div class="form-group">
      <label for="userpassword">Senha:</label>
      <input type="password" class="form-control" id="userpassword" placeholder="Informe sua senha" name="userpassword">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Lembre de mim </label>
    </div>
    <button type="submit" class="btn btn-default" href="">Entrar</button>
    <li> <a href="index.php"> voltar para a pagina inicial </a></li>
  </form>
</div>

    <section></section>

    <?php 
        session_start();
        if(isset($_SESSION['mensage'])){
            $mensage= $_SESSION['mensage'];

            echo '<p>'.$mensage.'</p>';

            unset($_SESSION['mensage']);
        }
    ?>

</body>

</html>