
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/painel.css">
    <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4af4a91ac3.js" crossorigin="anonymous"></script>
    <title>Painel de controle</title>
</head>
<body>

<div class="header">
    <div class="row">
       <div class="col-3 col-s-3 logo"><a href="../index.php"><img src="../imagens/logo.png"class="logo"></a></div>
        <div class="col-9"><a href="">logout</a></div>   
    </div>
</div><!--fim do header -->
<main>
   <div class="row">
        <div class="col-3">
            <div class="menu">
                    <ul>
                        <li><a href="">Imoveis</a>
                            <ul class="dropdown">
                                <li><a href="addimovel.php">Adicionar</a></li>
                                <li><a href="">Listar</a></li>
                                <li><a href="">Atualizar</a></li>
                                <li><a href="">Excluir</a></li>
                            </ul>
                         </li>
                      
                         <li><a href="">Videos</a>
                            <ul class="dropdown">
                                <li><a href="adicionar.php">Adicionar</a></li>
                                <li><a href="">Atualizar</a></li>
                                <li><a href="">Excluir</a></li>
                            </ul>
                         </li>

                         <li><a href="">Fotos</a>
                            <ul class="dropdown">
                                <li><a href="adicionar.php">Adicionar</a></li>
                                <li><a href="">Atualizar</a></li>
                                <li><a href="">Excluir</a></li>
                            </ul>
                         </li>

                    <li><a href="">Sair</a></li>     
                </ul>

            </div>
        </div>
        <div class="col-9">
    
        </div>
   </div>
</main>

</body>
</html>