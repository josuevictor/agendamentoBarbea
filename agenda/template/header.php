<?php

  include_once("../config/url.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de clientes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php $BASE_URL ?>../css/style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div>
        <div class="navbar-nav active">
          <a class="nav-link" id="home-link" href="<?php $BASE_URL ?>agenda.php">Agenda</a>
          <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>create.php">Adicionar contato</a>
        </div>
      </div>
      
    </nav>
  </header>