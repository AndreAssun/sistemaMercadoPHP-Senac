<?php include_once ("config/conexao.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market</title>
</head>
<body>
    <header  class="header">
    <a href="#default" class="logo"> Tito´s Market</a>
        <nav class="header-right">
            <a class="active" href="#home">Home</a>
            <a a href="#contact">Minha Conta</a>
            <a href="#about">Carrinho</a>
        </nav>
    </header>

    <main>
        <div>
            <div id="categorias" >
                <!--CATEGORIAS-->
                <?php include_once("includes/vitrine-categorias.php"); ?>
            </div>
            
            
            <div id="top-categorias">
                <!--TOPCATEGORIA-->
            </div>
            
            <div id="banner">
                <!--BANNER-->
            </div>
            
            <div id="top-mercados">
                <!--MERCADOS PEDIDOS USUARIO-->
            </div>
        </div>

        <h3>Mercadorias</h3>
        <div class="mercadorias">

        </div>
    </main>

    <style>

        /* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}


    </style>


</div>
</body>
</html>