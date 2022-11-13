<?php
    

    include_once "pages/header.php"
    
    
     ?>


<section class="galeria-fotos">

<h1>Galeria</h1>
<div class="gallery-2">

<?php


$diretorio = "imagens/todas/";
$imagens = glob($diretorio . "*");
foreach ($imagens as $imagens) {
    echo '<img src=" '.$imagens.' "/>';
}


?>
</div>
</section>
