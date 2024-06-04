<?php

  $host = "localhost"; //id21439970_pontoweb
  $user = "root"; //id21439970_victor
  $pass = ""; //0818466453Jv@
  $dbname = "agendamento";
  $port = 3306;

  try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "conexão realizada com sucesso";
  } catch (PDOException $err) {
    echo "Erro: conexão com o banco de dados não realizada com secesso. Erro gerado " . $err->getMessage();
  }




