<?php

  $numero = array(); 
	
//Guardar	
   function guardar ($numero){
	   if(!empty($_REQUEST['aceptar'])){
		   $numero[0] = $_REQUEST['num1'];
		   $numero[1] = $_REQUEST['num2'];
		   $numero[2] = $_REQUEST['num3'];
		   $numero[3] = $_REQUEST['num4'];  
		   return $numero;  
	   }
   }
 
  //suma
  function suma ($numero){
	  $Suma= $_REQUEST['num1']+$_REQUEST['num2']+$_REQUEST['num3']+$_REQUEST['num4'];
	  echo"Suma".'<br/>'.$Suma; 
  }
  //resta
  function resta ($numero){
	  $resta= ($_REQUEST['num1']+$_REQUEST['num2'])-($_REQUEST['num3']+$_REQUEST['num4']);
	  echo"Resta".'<br/>'.$resta; 
  }
  //multiplicar
  function multiplicacion ($numero){
	  $multi=$_REQUEST['num1']*$_REQUEST['num4'];
	  echo"Multiplicacion".'<br/>'.$multi; 
  }
  //dividir
  function divide ($numero){
	  $divide=($_REQUEST['num2']/$_REQUEST['num3']);
	  echo"Divición".'<br/>'.$divide; 
  }
  
 function fecha()
	{
		$fecha=date("d/m/Y");
		echo $fecha;
	}
  
?>