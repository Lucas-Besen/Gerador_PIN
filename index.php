<?php include_once('header.php');?>
<?php
$contador=0;
$numeroD=0;
$numeroC=0;
$numeroB=0;
$numeroA=0;
$numeroX=0;

$CodigoClienteString=filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_STRING);

  $CodigoCliente = (int) $CodigoClienteString;

  if ($contador==0) {
  	$numeroD= $CodigoCliente % 10;
    $CodigoCliente= (int)($CodigoCliente /10);
    $contador++;
  }
  if ($contador==1) {
  	$numeroC= $CodigoCliente % 10;
    $CodigoCliente = (int)($CodigoCliente /10);
    $contador++;
  }
  if ($contador==2) {
  	$numeroB= $CodigoCliente % 10;
    $CodigoCliente = (int)($CodigoCliente /10);
    $contador++;
  }
  if ($contador==3) {
  	$numeroA= $CodigoCliente % 10;
   	$CodigoCliente = (int)($CodigoCliente /10);
   	$contador++;
  }
	$numeroX=($numeroC+$numeroD);
  
 ?>

 <?php include_once('footer.php');?>