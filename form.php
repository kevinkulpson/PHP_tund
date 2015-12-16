<!DOCTYPE html>
<html>
<body>

Nimi:<?php echo $_POST["eesnimi"]; ?><br>
Perekonnanimi:<?php echo $_POST["perekonnanimi"]; ?><br>
Sugu:<?php echo $_POST["sugu"]; ?><br>
Kirjeldus:<?php echo $_POST["kirjeldus"]; ?><br>
Masina liik:<?php echo $_POST["masin"]; ?><br>
Auto mark:<?php echo $_POST["autod"]; ?><br>
Pilt:<?php echo $_POST["fileupload"]; ?><br>
<br></br>
<?PHP

###################### Set up the following variables ######################
#                                                                          #
$filename = "users.txt"; #CHMOD to 666
$forward = 0; # redirect? 1 : yes || 0 : no
$location = "form.html"; #set page to redirect to, if 1 is above
#                                                                          #
##################### No need to edit below this line ######################

## set time up ##
$date = date ("l, F jS, Y");
$time = date ("h:i A");

## mail message ##

$msg = "Allpool on toodud formi vastused. Need olid salvestatud $date $time.\n\n
";

foreach ($_POST as $key => $value)
{
    $msg .= ucfirst ($key) ." : ". $value . "\n";
}

$msg .= "-----------\n\n";

$fp = fopen ($filename, "a"); # w = write to the file only, create file if it do
es not exist, discard existing contents
if ($fp) {
    fwrite ($fp, $msg);
    fclose ($fp);
}
else {
    $forward = 2;
}

if ($forward == 1) {
    header ("Location:$location");
}
else if ($forward == 0) {
    echo ("Vastus on salvesatud.");
}
else {
    "Error processing form. Please contact the webmaster";
}

?>

</body>
</html>
