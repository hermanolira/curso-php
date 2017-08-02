<?php

class Usuarios {
  function lista($senha){
    $senhasValidas = array('wpk9mnj', 'ikl3pam', 'ljn6jae', 'csd1hye');
    if(!in_array($senha, $senhasValidas)) 
      throw new Exception("ERRO:A SENHA $senha NAO EXISTE NA LISTA");
  }
}

$usuario = new usuarios();

try {
  $usuario->lista("uyy7mks");
} catch (Exception $li) {
  echo ($li->getMessage());
}

?>