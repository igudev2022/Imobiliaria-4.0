<?php 

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nome;

    $con = mysqli_connect("127.0.0.1","root","","imobiliaria");
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) > 0) {
        header("location:../view/painel.php");
        while($row = mysqli_fetch_assoc($result)) {
          $nome = $row["nome"];
          session_start();
          $_SESSION["nome"] = $nome;
        }
      } else {
        echo "USUÁRIO NÃO ENCONTRADO!!!";
        header("location:../view/login.php");
     }
     
      mysqli_close($con); 

?>