<?php

function criarArtigo ($imagem,$tema,$titulo,$subtitulo,$data,$tag){
    return "
     <div class='artigo'>
        <div class='lado-esquerdo'>
            <img src='$imagem'>
            <div class ='mini-footer'>
               <p>$tema</p>
               <span>$data</span>
            </div>
        </div>
        <div class='lado-direito'>
            <h1>$titulo</h1>
            <h3>$subtitulo</h3>
            <p>$tag</p>
        </div>
     <div>
    ";
 }
?>
