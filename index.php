<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<title>Tables de multiplications</title>
</head>

<header>

<h1>TABLES DE MULTIPLICATIONS</h1>
<br>
<div class="tabs"></div>
<form method="post" name="multiplication" id="multiplication">
<div id="choice">
<select name="multis">
<option value="0">-----</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

<br>
Choisis la table à afficher
<br>
<input id="send" type="submit" value="voir"/>
<?php
$chiffre = $_POST['multis'];
include "table.php";
drawtable();

?>

</div>
</form>

</div>

</header>



<div id="affichage">

</div>



<script src="js/main.js"></script>
</body>






</html>