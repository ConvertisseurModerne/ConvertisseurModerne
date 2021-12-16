<!DOCTYPE html>
<html>
<head>
	<title>Convertisseur de notes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--<div class="box">
		<form action="index.php" method="post">
			<span>Calculateur</span>
			<div class="input-container">
				<input type="number" name="note1">
				<label>Votre note : </label>
			</div>

			<div class="input-container">
				<input type="number" name="note2">
				<label>La note maximum :</label>
			</div>

			<div class="input-container">
				<input type="number" name="note3">
				<label>Convertir sur :</label>
			</div>
			<button type="submit" name="submit">Convertir</button>
		</form>
	</div>-->


 	<form action="index.php" method="post">
      <div class="title">Convertisseur de note</div>
      
      <div class="input-container ic1">
        <input class="input"  name="note1" type="text" placeholder=" " >
        <label class="placeholder">Votre note:</label>
      </div>

      <div class="input-container ic2">
        <input class="input" name="note2" type="text" placeholder=" " >
        <label class="placeholder">Note maximum:</label>
      </div>

      <div class="input-container ic2">
        <input class="input" name="note3" type="text" placeholder=" " >
        <label class="placeholder">la convertir :</label>
      </div>

      
      <button type="submit" name="submit">Convertir</button>
    </div>
</form>



	<?php
	if (isset($_POST['submit'])) {
		$varnote = $_POST['note1'];
		$varnotemax = $_POST['note2'];
        $varnoteconv = $_POST['note3'];

        $resultat = ($varnote / $varnotemax) * $varnoteconv;

        echo  "<h1 class='resultat'>Votre note est de $resultat / $varnoteconv </h1>";
	}

		
	 ?>



</body>
</html>