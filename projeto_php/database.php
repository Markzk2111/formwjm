<?php 

    define("SERVER_LOCAL","localhost");
    define("SERVER_USER","root");
    define("SERVER_PASSWORD","");
    define("DATABASE_NAME","wjm_user");

    $conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);


?>