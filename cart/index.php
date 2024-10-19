<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KoreShop</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    
    
    <!-- Topo (header) --->

        <div class="header-koreshop">
            <p class="logo">Kore Shop</p>
            <div class="cart"><i class="fa fa-shopping-cart"></i>
                <p>0</p>
            </div>
        </div>
    <!-- Final do topo (header) -->

    <!-- Conteúdo do site (Itens) -->
        <div class="container">
            

            <!--Inicio Produto-->
            <div class="linha-produtos">
                <div class="corpoProduto">
                    <div class="imgProduto">
                        <img src="assets/img/produto-1" alt="" class="produtoMiniatura" />
                    </div>
                        <div class="titulo"></div>
                            <p>Curso PHP</p>
                            <h2>R$ 497</h2>
                </div>
            </div>
            <!--Fim Produto-->

        </div>
    <!-- Fim do conteúdo (Itens)-->


</body>
</html>