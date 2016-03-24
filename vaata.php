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
<?php
require_once('db-api.php');
$item = vaata_API($_GET["key"]);
?>
<table align="left" cellpadding="5" rowspan="5">
	<tr>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
		<td width=150>
	</tr>
	<tr>
		<th>ID: </th><td><?=$item["id"]?></td>
	</tr>
	<tr>
		<th>Sinu nimi: </th><td><?=$item["ans1"]?></td>
	</tr>
	<tr>
		<th>Enda kirjeldus: </th><td><?=$item["ans2"]?></td>
	</tr>
	<tr>
		<th>Valitud arv: </th><td><?=$item["ans3"]?></td>
	</tr>
	<tr>
		<th>Kumb tuli enne: </th><td><?=$item["ans4"]?></td>
	</tr>
	<tr>
		<th>Kas vajutasid kasti peale?: </th><td><?=$item["ans5"]?></td>
	</tr>
	<tr>
		<th>Salvestamise aeg: </th><td><?=$item["aeg"]?></td>
	</tr>
	</table>
</div>
<div class="container">
  <form role="form" action="index.php" method="GET"><br><br>
<button type="submit" class="btn btn-default">Tagasi</button>
  </form>
</div>
