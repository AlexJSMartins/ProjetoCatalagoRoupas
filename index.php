<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/features.css">

    <title>Loja</title>
</head>

<body>
    <?php
    include_once "pages/svg.php";

    include_once "pages/header.php"

    ?>

    <nav>


        <section class="banner">

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/Banners/Rosa-Azul-Preto-GradienteBanner.png" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                        </img>


                    </div>

                </div>
            </div>

        </section>


        <section class="galeria-inicial">
            <div class="gallery">
                <a href=""><img src="imagens/blur-2841225__340.jpg" alt="a forest after an apocalypse"></a>
                <a href=""><img src="imagens/hats-995629__340.webp" alt="a waterfall and many rocks"></a>
                <a href=""><img src="imagens/fornecedores-de-roupas.jpg" alt="a house on a mountain"></a>
                <a href=""><img src="imagens/depositphotos_6634332-stock-photo-jeans-clothes-on-shelf-in.jpg" alt="sime pink flowers"></a>
                <a href=""><img src="imagens/converse-2387917_960_720.jpg" alt="big rocks with some trees"></a>
            </div>
        </section>

        <section class="galeria-fotos-1">

            <h1>Destaques</h1>
            <div class="gallery-1">

                <?php


                $diretorio = "imagens/Destaques/";
                $imagens = glob($diretorio . "*");
                foreach ($imagens as $imagens) {
                    echo '<img src=" ' . $imagens . ' "/>';
                }


                ?>
            </div>
        </section>


        <section class="email">
            <h3>Receba Nossas Ofertas em seu E-Mail</h3>
            <nav class="navbar ">
                <div class="container-fluid justify-content-center">
                    <form class="d-flex" method="POST" action="email/email.php" >
                        <input class="form-control col-md-12" type="email" id="email" name="email" placeholder="E-Mail" aria-label="Search">
                        <button class="btn btn-outline" type="submit" id="acao" name="acao" ><b>Enviar</b> </button>
                    </form>
                </div>
            </nav>


        </section>


    </nav>






    <?php include_once "pages/footer.php" ?>
</body>