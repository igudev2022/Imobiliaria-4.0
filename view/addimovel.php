

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addimovel.css">
    <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4af4a91ac3.js" crossorigin="anonymous"></script>
    <title>Adicionar Imóveis</title>
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
                                <li><a href="addimovel">Adicionar</a></li>
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
        <div class="col-8">
    <form action="../php/cadastrar.php" method="post">
        <label for="">Tipos de Imóveis</label>
            <select name="tipo-imovel" id="">
                <option value="apartamento">Apartamento</option>
                <option value="terreno">Terreno</option>
                <option value="chacara">Chácara</option>
                <option value="casa">Casa</option>
                <option value="sitio">Sitio</option>
                <option value="area-comercial">Área Comercial</option>
            </select><br>
      
       <label for="">Tipo de negociação</label>
            <select name="tipo-negociacao" id="">
                <option value="venda">Venda</option>
                <option value="locacao">Locação</option>
            </select><br>
       
       <label for="">Área</label>
       <input type="number" placeholder="digite apenas números:" name="area" min="0"><br>
         <!--<select name="area" id="">
                <option value="50-100">50m² a 100m²</option>
                <option value="101-200">101m² a 200m²</option>
                <option value="201-300">201m² a 300m²</option>
                <option value="301-400">301m² a 400m²</option>
                <option value="401-500">401m² a 500m²</option>
                <option value="501-1000">501m² a 1000m²</option>
                <option value="1000-2000">1000m² a 2000m²</option>
         </select> <br>-->
 
        <label for="">Preço</label>
       <input type="number" placeholder="digite apenas números:" name="preco" min="50000"><br>

          <!--<select name="preco" id="">
               <option value="50000-100000">R$ 50.000,00 a R$ 100.000,00</option>
               <option value="101000-201000">R$ 101.000,00 a R$ 201.000,00</option>
               <option value="201000-300000">R$ 201.000,00 a R$ 300.000,00</option>
               <option value="301000-400000">R$ 301.000,00 a R$ 400.000,00</option>
               <option value="401000-500000">R$ 401.000,00 a R$ 500.000,00</option>
               <option value="501000-1000000">R$ 501.000,00 a R$ 1.000.000,00</option>
               <option value="1000000-2000000">R$ 1.000.000,00 a R$ 2.000.000,00</option> 
          </select><br>-->

        <label for="">cidade</label>
         <select name="cidade" id="">
            <option value="tatui">Tatui</option>
            <option value="cesario-lange">Cesario lange</option>
            <option value="boituva">Boituva</option>
            <option value="itapetininga">Itapetininga</option>
            <option value="capela-do-alto">Capela do Alto</option>
            <option value="ipero">Iperó</option>
           </select><br>

           <label for="">Bairro</label>
                <select name="bairro" id="">
                <option value="">aaaa</option>
            </select><br>

            <label for="">Comodos</label>
       <input type="number" placeholder="digite apenas números:" name="preco" min="50000"><br>

       <label for="">Banheiros</label>
       <input type="number" placeholder="digite apenas números:" name="preco" min="50000"><br>

       <label for="">Vagas Garagem</label>
       <input type="number" placeholder="digite apenas números:" name="preco" min="50000"><br>

       <label for="">Descrição:</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
       <input type="submit" value="ENVIAR">

      </form>
        </div>
   </div>
</main>

</body>
</html>