<?php  
    include "database.php";

    session_start();

    $email = $_POST["useremail"];
    $senha = $_POST["userpassword"];

    if(empty($email))
    {
        $_SESSION['mensage'] = "preencha o campo Email! ";
        header("Location: userlogin.php");
    }
    elseif(empty($senha))
    {
        $_SESSION['mensage'] = "preencha o campo Senha! ";
        header("Location: userlogin.php");
    }
    else
    {

        $sql = "SELECT * from wjm_soc WHERE useremail='$email' AND userpassword='$senha' ";


        $resultado = mysqli_query($conexao,$sql);


        $dados = mysqli_fetch_assoc($resultado);

        if(mysqli_num_rows($resultado) > 0)
        {
            $_SESSION['useremail'] = $email;
            $_SESSION['userpassword'] = $senha;
            header('Location: pgprin.php');
        }
        else
        {
            unset ($_SESSION['useremail']);
            unset ($_SESSION['userpassword']);
            header('Location: userlogin.php');
        }
        



    }

?>