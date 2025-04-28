<?php

require '../components/formulario.php';
?>

<link rel="stylesheet" href="../assets/css/style.css">
<body>
    <h1>Hora de se cadastrar!</h1>

    <div class="inputs">
        <h2>Dados Pessoais</h2>

        <div class="input">
            <?= novoFormulario('Nome: ', 'text', 'escreva seu nome') ?>
        </div>

        <div class="input">
            <?= novoFormulario('Email: ', 'text', 'escreva seu email') ?>
        </div>

        <div class="input">
            <?= novoFormulario('CPF: ', 'text', 'escreva seu cpf') ?>
        </div>

        <div class="input">
            <?= novoFormulario('Telefone: ', 'text', 'escreva telefone') ?>
        </div>

        <div class="input">
            <?= novoFormulario('Sujestão: ', 'text', 'escreva sua sujestão') ?>
        </div>

        <div class="botoes">
            <button class="botao">
                <a href="http://localhost/componente-dinamico/componente-dinamico/">
                    Home
                    <!-- <button>voltar</button> -->
                </a>
            </button>
            <button class="botao">
                <a href="./../pages/musicas.php">
                    enviar
                </a>
            </button>

        </div>
    </div>
</body>