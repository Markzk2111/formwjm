<link href="CSS/style.css" rel="stylesheet" >



<?php 

    include_once "database.php";

    $sql = "SELECT * FROM wjm_soc";

    $result  = mysqli_query($conexao, $sql);

?>

<head>
    <title>Sócios</title>
</head>
<table width="467" border="1px">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">CELULAR</th>
    </tr>
  </thead>
  <tbody>
    <?php while($dados = mysqli_fetch_array($result)){?> 
    <tr>
        <td><?php echo $dados['id']; ?></td>
        <td><?php echo $dados['username']; ?></td>
        <td><?php echo $dados['useremail']; ?></td>
        <td><?php echo $dados['usercel']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<li> <a href="index.php"> voltar para a pagina inicial </a></li>