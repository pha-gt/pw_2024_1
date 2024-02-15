<?php
$variable=isset($_GET['nombre'])?$_GET['nombre']:"Anonimo";
$numero=isset($_GET['n'])?$_GET['n']:1;

//$variable="Fabian";

echo "<html>";
echo "<head>";
echo "<title>php primero ";
echo $variable;
echo "</title>";
echo "</head>";

echo "<body>";
?>

<?php

echo "<h1>".$variable."</h1>";


for($i=0;$i<$numero;$i++)
{
    echo $variable."<br>";
}

?>


<?php
echo "</body>";

echo "</html>";

?>

