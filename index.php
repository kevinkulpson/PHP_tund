<!DOCTYPE html>
<html lang="et">
<head>
  <title>Vastused</title>
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
  <h4>Vastused</h4>
<br><br>
<table align="left" cellpadding="5" rowspan="5">
    <tr>
        <th>Vastaja</th>
        <th>vaata</th>
		<th>muuda</th>
		<th>kustuta</th>
    </tr>
	<tr>
		<td width=200>
		<td width=60>
		<td width=60>
		<td width=60>
	</tr>
	<?php
	require_once("api.php");
	$items = list_API();
	foreach ((array) $items as $key => $item) {
		if ($item != NULL){
	?>
			<tr>
				<td><?=$item["ans1"]?></td>
				<td><a href="vaata.php?key=<?=$key?>"><?="Vaata"?></a></td>
				<td><a href="muuda.php?key=<?=$key?>"><?="Muuda"?></a></td>
				<td><a href="kustuta.php?key=<?=$key?>"><?="Kustuta"?></a></td>
			</tr>
			<?php
		}
	}
?>
</table>
</div>
