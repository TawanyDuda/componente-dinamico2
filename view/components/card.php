<?php

function criarCard($img,$nome,$descricao){
    return "
    <div class ='card'>
        <img src='$img'/>
        <h2>$nome</h2>
        <p>$descricao<p>
    </div>
    ";
}

?>