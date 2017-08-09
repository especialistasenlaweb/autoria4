<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tienda Computadores</title>
</head>
<body>
	<h1>Tienda Computadores a 1.000.000</h1>
	<form action="" method="post">
		Nombre: <br> <input name="n"> <br>
		Correo: <br> <input name="c"> <br>
		Cantidad: <br> <input name="can"> <br>
		Metodo Pago: <br>
		<select name="pago">
			<option value="1">corriente</option>
			<option value="2">credito</option>
			<option value="3">efectivo</option>
		</select> <br>
		<input type="submit">
	</form>
	<?php 
		if ($_POST) {
			$nombre=$_POST['n'];
			$correo=$_POST['c'];
			$cantidad=$_POST['can'];
			$pago=$_POST['pago'];
			$precio=1000000;
			$subtotal=$precio*$cantidad;
			$iva=($subtotal*19)/100;

			if ($pago==1) {
				$porcentaje=($subtotal*10)/100;
			}elseif($pago==2){
				$porcentaje=($subtotal*7)/100;
			}elseif($pago==3){
				$porcentaje=-($subtotal*10)/100;
			}

			$total=($subtotal+$iva)+$porcentaje;
			echo "$nombre <br>$correo<br>$cantidad<br>$subtotal<br> $iva<br> $total";
		}

	 ?>
</body>
</html>