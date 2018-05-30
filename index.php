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
$uno = "Vengo de una variable creada con PHP";
$dos = 2;
$tres = "texto tres";
$cuatro = " & ";
$cinco = "texto cinco";
$seis = 6;
$diez = 10;
?>

<h1><?php echo "Hola, soy un string a pelo desde PHP" ?></h1>
<p><?php echo $uno ?></p>
<p><?php echo $dos ?></p>
<i><?php echo $tres.$cuatro.$cinco ?></i>
<p>El cuadrado de los siguientes números con un bucle for:</p>
<?php 
for ($i = 0; $i < $seis; $i++) {
  $cuadrado = $i * $i;
  echo "<p><b>Número: </b><i>".$i.".</i><b> Su cuadrado: </b><i>".$cuadrado."</i></p>";
  if ($cuadrado % 2 === 0) { echo "<p>".$i." es un número par.</p>"; }
  else { echo "<p>".$i." es un número impar.</p>"; }
}
?>

<p>Multiplicamos los 10 primeros números naturales:</p>
<?php
$j = 1;
$contador = 2;
while ($contador <= $diez) {
  $j *= $contador;
  $contador++;
  echo "<p><i>".$j."</i></p>";
}
?>
<p>Resultado: <b><?php echo $j ?></b>.</p>

<p>Gestionando peticiones GET:</p>
<p>Multiplicamos por el valor que le demos a la query GET [numero]:</p>
<?php
if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
  $numGET = $_GET["numero"]; }
else {
  $numGET = 5;
  echo "<p>Número para multiplicar por defecto es: <i>".$numGET."</i></p>"; }

for ($c = 0; $c < $diez; $c++) { 
  echo "<p>".$c." * <i>".$numGET."</i> = <b>".$c*$numGET."</b></p>";
}
?>

</body>
</html>
