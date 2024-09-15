<html>
   <head> 
        <title> Calculos </title>
		<meta charset="utf-8"> 
   </head> 
   <body>
        <h3> CALCULOS </h3>
        <form name="CALCULOS" method="POST" action=" ">
		<?php
		    date_default_timezone_set('America/Costa_Rica');
			require_once("FuncionesCalculo.php");  
			fecha();
		    ?>
		<br/> <br/>
		Digite 4 numeros
		<br/> <br/>		
		Primer numero
		<input name="num1" type="number" required placeholder="Numeros" value="">
		<br/> <br/>
		Segundo numero
		<input name="num2" type="number" required placeholder="Numeros" value="">
		<br/> <br/>
		Tecer numero
		<input name="num3" type="number" required placeholder="Numeros" value="">
		<br/> <br/>
		Cuarto numero
		<input name="num4" type="number" required placeholder="Numeros" value="">
		<br/> <br/>
		
		Opciones: 
		<br/>
		<input name="datos" type="radio"  value="suma" >
		<label for="datos"> Suma</label><br>
		<input name="datos" type="radio"  value="resta" >
		<label for="datos"> Resta</label><br>
		<input name="datos" type="radio"  value="multiplicacion" >
		<label for="datos"> Multiplicacion</label><br>
		<input name="datos" type="radio"  value="dividir" >
		<label for="datos"> Dividir</label><br>
		<br/> <br/>	
		
		
		<input value="Aceptar" name="aceptar" type="submit"> 
		<input name="cancelar" value="Cancelar" type="reset">

        </form>
		<?php	
			require_once("FuncionesCalculo.php");
			$numero = array();			
			$numero = guardar ($numero);
			
			if($_POST['datos'] == 'suma'){	
				suma ($numero); 
				echo "<script language='JavaScript'>alert('Resultado de la suma');</script>"; 
			}
			if($_POST['datos'] == 'resta'){	
					resta ($numero); 
					echo "<script language='JavaScript'>alert('Resultado de la resta');</script>";
			}	
			if($_POST['datos'] == 'multiplicacion'){	
					multiplicacion ($numero); 
					echo "<script language='JavaScript'>alert('Resultado de la multiplicacion');</script>";
			}
			if($_POST['datos'] == 'dividir'){	
					divide ($numero); 
					echo "<script language='JavaScript'>alert('Resultado de  dividir');</script>";
			}	

		?>
   </body>
</html>
