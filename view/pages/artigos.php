<?php
require '../components/artigo.php';
require '../components/head.php';
?>

<body>
    <?php
    require '../components/navbar.php';
    ?>

    <h1>Artigos</h1>
    <div class="artigos">
        <?= criarArtigo("../img/nirvana2.jpg", "Educação", "titulo","subtitulo","15 horas atrás","tag") ?>
    </div>


</body>