<?php
  #Encapsulamento
  require_once 'controle_remoto.php';

  $c = new ControleRemoto();
  $c->ligar();
  $c->maisVolume();

  $c->abrirMenu();










?>
