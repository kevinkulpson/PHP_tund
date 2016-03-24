<?php
require_once("db-api.php");
$item = vaata_API($_GET["key"]);
kustuta_API($item);
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
<div class="collapse navbar-collapse" id="bs-navbar-collapse">
	<ul class="nav navbar-nav">
		<li><a href="form.html">Küsimused</a></li>
		<li><a href="index.php">Vastused</a></li>
	</ul>
</div>
<div class="container">
  <form role="form" action="index.php" method="GET"><br><br>
  <p><b>Vastus on kustutatud!</b></p>
  <button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>
</body>
</html>
