<?php

function novoFormulario ($nome,$type,$placeholder){
   return "
    <form>
        <label>$nome</label>
        <input type='$type' placeholder='$placeholder'>
    <form>
   ";
}


?>