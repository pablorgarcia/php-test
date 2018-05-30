<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PHP Test</title>
<style>
body { font-family: monospace; font-size: 1.5vw; line-height: 1.8vh; background-color: #002831; color: #eee8d7; }
h1 { font-family: monospace; font-size: 2.2vw; line-height: 2.2vh; color: #1a8ccd; }
p { color: #83982e; }
b { color: #e12f34; }
i { color: #b7882a; }
</style>
</head>
<body>

<?php
$one = "I come from a variable created with PHP";
$two = 2;
$three = "three text";
$four = " & ";
$five = "five text";
$six = 6;
$ten = 10;
?>

<h1><?php echo "Hi, I'm a direct string from PHP" ?></h1>
<p><?php echo $one ?></p>
<p><?php echo $two ?></p>
<i><?php echo $three.$four.$five ?></i>
<p>The square of the following numbers with a for loop:</p>
<?php 
for ($i = 0; $i < $six; $i++) {
  $squareNum = $i * $i;
  echo "<p><b>Number: </b><i>".$i.".</i><b> Square of number: </b><i>".$squareNum."</i></p>";
  if ($squareNum % 2 === 0) { echo "<p>".$i." es un número par.</p>"; }
  else { echo "<p>".$i." es un número impar.</p>"; }
}
?>

<p>Multiply the first 10 natural numbers:</p>
<?php
$j = 1;
$counter = 2;
while ($counter <= $ten) {
  $j *= $counter;
  $counter++;
  echo "<p><i>".$j."</i></p>";
}
?>
<p>Result: <b><?php echo $j ?></b>.</p>

<p>Managing GET requests:</p>
<p>Operate with the value that we give to the query GET [number]:</p>
<?php
if (isset($_GET["number"]) && is_numeric($_GET["number"])) {
  $numGET = $_GET["number"]; }
else {
  $numGET = 5;
  echo "<p>Number by default for multiply is: <i>".$numGET."</i></p>"; }

for ($c = 0; $c < $diez; $c++) { 
  echo "<p>".$c." * <i>".$numGET."</i> = <b>".$c*$numGET."</b></p>";
}
?>

</body>
</html>
