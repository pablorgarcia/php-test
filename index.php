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
a { color: rgb(10, 160, 151); }
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
<a href="?number=9">?number=9</a>
<a href="?number=12">?number=12</a>
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

<p>Using a count() function and forEach loop:</p>
<?php
$months = array("Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec");
for ($m=0; $m < count($months); $m++) {
  echo "<i>".$months[m]."</i>";
}
echo "<p>Number of all elements inside of Array months: <b>".count($months)."</b></p>";
echo "<p>The same with forEach:</p>";
foreach ($months as $month) {
  echo "<p>".$month."</p>";
}
?>

<?php
$factorial = 1;
$numToFact = 5;
?>
<p>Calculating the factorial number of <?php echo $numToFact ?>:</p>
<?php
for ($h = 0; $h < $numToFact; $h++) { 
  if (($h + 1) === $numToFact) {
    $factorial *= $numToFact;
    echo "<b>Result = ".$factorial."</b>"; }
  else {
    $factorial *= $numToFact;
    echo "<i>".$factorial."</i>"; }
}
?>

<p>Sort and rsort functions:</p>
<p>Numbers from array:</p>
<?php
$arrToSort = array(50, 33, 6, 99, 21);
foreach ($arrToSort as $numSorted) { echo "<p>".$numSorted."</p>"; }
?>
<p>Numbers sorted:</p>
<?php
sort($arrToSort);
foreach ($arrToSort as $numSorted) { echo "<b>".$numSorted."</b>"; }
?>
?>
<p>Numbers rsorted:</p>
<?php
rsort($arrToSort);
foreach ($arrToSort as $numSorted) { echo "<i>".$numSorted."</i>"; }
?>

<p>array_search() function:</p>
<?php
if (!array_search($ten, $arrToSort)) {
  echo "<p><b>".$ten."</b> does not exist within the previous array.</p>"; }
else { echo "<p><b>".$ten."</b> exists in the previous array.</p>"; }
?>

<p>Whats my IP and Am I browsing with Firefox?:</p>
<?php
$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];
echo "<p>Your IP: <i>".$ip."</i></p>";
if (strstr($browser == "Firefox")) { echo "<p>Your are in Firefox</p>"; }
else { echo "<p>Your are not in Firefox</p>"; }
?>

</body>
</html>
