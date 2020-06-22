<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
      <style>
          body{
          background: url(https://cdn.pixabay.com/photo/2017/04/29/22/47/password-2271736_1280.jpg);
          background-attachment: fixed;
          background-size: cover;
          background-repeat: no-repeat;
          
        }
      </style>
  </head>
  <body>
    <script>
      function tecla(){
        evt = window.event;
        var tecla = evt.keyCode;

        if(tecla > 57 || tecla < 48 && tecla != 13)
        { 
          alert('Precione apenas teclas numéricas');
          evt.preventDefault();
        }
      }
    </script>
    <form method="POST" action="index.php">
    <br>
    <br>
    <div align="center" >
      <div style = "max-width:200px;">
        <input type="text" class="form-control "name="codigo" placeholder="codigo: 0000" onKeyPress = "tecla()" required="required" maxlength="4" autocomplete="off">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Gerar</button>
    </div>
  