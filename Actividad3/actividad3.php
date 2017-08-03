<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/actividad2.css">
	<meta charset="UTF-8">
	<title>Signos Zodiaco</title>
</head>
<body>

	<div class="caja">
		<div class="cajahijo1">
			<a href="actividad3.php?code=1">Picis</a>
			<a href="actividad3.php?code=2">Acuario</a>
			<a href="actividad3.php?code=3">Sagitario</a>
		</div>
		<div class="cajahijo2">
			<?php 
				if (isset($_GET['code'])) {
					$c=$_GET['code'];
					echo "<img src='css/$c.jpg'  >";
				}else{
					echo "<img src='css/signos.jpg'  >";
				}
			 ?>
		</div>
		<div class="cajahijo3">
			<?php 
				if (isset($_GET['code'])) {
					$c=$_GET['code'];
					if ($c==1) {
						echo "Te gusta vestirte bien <br>";
					}elseif($c==2){
						echo "Te gustan los peces<br>";
					}elseif ($c==3) {
						echo "<div class='rumba'> Te gusta la Rumba</div> <br>";
					}
				}else{
					echo "Cualquier info...";
				}
			?>
		</div>
	</div>
	
</body>
</html>