<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4af4a91ac3.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="header">
        <div class="row">
     <div class="col-3 col-s-3 logo"><a href="../index.php"><img src="../imagens/logo.png"class="logo"></a></div>
        
</div> 

    <form action="../php/logar.php" method="post">
        <h1>LOGIN</h1>
        <hr>
    <label for="">E-mail:</label>
    <input type="email" name="email" placeholder="digite o seu e-mail:"> 
<br>
    <label for="">Senha:</label>
    <input type="password" name="senha" placeholder="digite sua senha:">
 <br>   
    <input class="button" type="submit" value="Logar">

    </form>
    <br>
<footer>
<div class="icons">
        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
        <a href=""><i class="fa-brands fa-instagram fa-2xl"></i></a>
        <a href=""><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
        <a href=""><i class="fa-brands fa-youtube fa-2xl"></i></a>
        <a href=""><i class="fa-regular fa-envelope fa-2xl"></i></a>
    </div>
</footer>

</body>
</html>