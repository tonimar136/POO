<?php
  #Metodos Getters e Setters
  require_once('conta.class.php');

  $p1 = new ContaBanco();
  $p2 = new ContaBanco();


  $p1->abrirConta('CC');
  $p1->setDono('Jubileu');
  $p1->setnumConta('1111');
  $p1->depositar(300);
  $p1->pagarMensal();



  $p2->abrirConta('CP');
  $p2->setDono('Creuza');
  $p2->setnumConta('2222');
  $p2->depositar(500);
  $p2->sacar(100);
  $p2->pagarMensal();




  echo '<pre>';
  print_r($p1);
  print_r($p2);







?>
