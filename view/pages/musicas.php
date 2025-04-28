<?php
require '../components/button.php';
require '../components/card.php';
require '../components/head.php';
?>

<body>
    <?php
    require '../components/navbar.php';
    ?>

    <h1 class="titulo">Músicas</h1>
    <div class="cardes">
        <?= criarCard("../img/nirvana2.jpg", "titulo", "Banda: Nirvana") ?>
        <?= criarCard("../img/baco.jpg", "titulo", "Cantor: Baco Exu") ?>
        <?= criarCard("../img/duzz.jpg", "titulo", "Cantor: Duzz") ?>
        <?= criarCard("../img/greenday.jpg", "titulo", "Banda: Greenday") ?>
        <?= criarCard("../img/nirvana.jpg", "titulo", "Banda: Nirvana") ?>
        <?= criarCard("../img/raibowkitten.jpg", "titulo", "Banda: Raibow Kitten Surprise") ?>
    </div>

    <?php
    require '../components/footer.php';
    ?>
</body>