<?php
require_once("db-api.php");
$item = vaata_API($_GET["key"]);
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <title>Küsimused</title>
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
  <h4>Vastuste muutmine</h4>
  <form role="form" action="form.php" method="POST"><br><br>
	<div class="form-group">
      <label for="name">ID</label>
      <input name="id" type="text" class="form-control" id="id" value=<?=$item["id"]?> readonly>
    </div>
	<div class="form-group">
      <label for="name">Sinu nimi:</label>
      <input name="ans1" type="text" class="form-control" id="ans1" value="<?=$item["ans1"]?>">
    </div>
	<div class="form-group">
      <label for="comment">Kirjuta endast:</label>
       <textarea name="ans2" class="form-control" rows="5" id="ans2"><?=$item["ans2"]?></textarea>
    </div>
	 <div class="form-group">
  <label for="sel1">Vali suvaline arv:</label>
  <select name="ans3" class="form-control" id="ans3">
    <option>7</option>
    <option>43</option>
    <option>69</option>
    <option>101</option>
  </select>
</div>
	<div class="radio">
		<strong>Kana või muna:</strong><br>
  <label><input type="radio" name="ans4" value="ans4" checked>Kana</label>
  <label><input type="radio" name="ans4" value="ans4">Muna</label>
   </div><br>
   <p><b>Klikatav kast:</b>
    <div class="checkbox">
    <label><input type="checkbox" id="ans5" name="ans5" value="jah">Vajutasin kasti peale</label>
    </div><br>
	<input type="hidden" id="tuvasta" name="tuvasta" value=1>
	<button type="submit" class="btn btn-default">Kinnita</button>
  </form>
</div>
</body>
</html>
