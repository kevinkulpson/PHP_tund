<?php
require_once("api.php");
$tuvasta = $_POST["tuvasta"];
if ($tuvasta == 0){
	$item = array(
	"ans1" => $_POST["ans1"],
	"ans2" => $_POST["ans2"],
	"ans3" => $_POST["ans3"],
	"ans4" => $_POST["ans4"],
	"ans5" => $_POST["ans5"],
	"tuvasta" => $_POST["tuvasta"]);
	
	salvesta_API($item);
	}
else {
	$item = array(
	"id" => $_POST["id"],
	"ans1" => $_POST["ans1"],
	"ans2" => $_POST["ans2"],
	"ans3" => $_POST["ans3"],
	"ans4" => $_POST["ans4"],
	"ans5" => $_POST["ans5"],
	"tuvasta" => $_POST["tuvasta"]);
	
	muuda_API($item);
	}
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <title>Valmis</title>
  <meta charset="utf-8">
</head>
<body>
<div class="collapse navbar-collapse" id="bs-navbar-collapse">
	<ul class="nav navbar-nav">
		<li><a href="form.html">Küsimused</a></li>
		<li><a href="index.php">Vastused</a></li>
	</ul>
</div>
<?php
if ($tuvasta == 0) {
  print '<div class="container">
           <h2>Valmis</h2>
           <form role="form" action="form.html" method="GET"><br><br>
             <p><b>Teie vastused on salvestatud</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
           </div>';
}
else {
  print '<div class="container">
           <form role="form" action="index.php" method="GET"><br><br>
             <p><b>Vastused muudetud</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
         </div>';
}
?>
