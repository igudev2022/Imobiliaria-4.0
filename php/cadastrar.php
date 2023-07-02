<?php 
    $tipoimovel = $_POST["tipo-imovel"];
    $tiponegociacao = $_POST["tipo-negociacao"];
    $area = $_POST["area"];
    $preco = $_POST["preco"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];

    $con = mysqli_connect("127.0.0.1","root","","imobiliaria");
    $sql = "INSERT INTO imoveis VALUES (0,'$tipoimovel','$tiponegociacao',$area,$preco,'$cidade','$bairro')";
    
    mysqli_query($con, $sql);
   // header("location:index.php");
?>