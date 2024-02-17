<?php


if(isset($_GET['nombre'])){
    $variable = $_GET['nombre'];
}
else
{
    $variable = "Anonimo";
}
$titulo = isset($_GET['titulo'])?$_GET['titulo']:"Genericos";

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
$varible2 = 3;


if(isset($varible2))
{
    echo "Esta definido";
}
else
{
    echo "NO Esta definido";
}



echo "<h1>".$titulo." Aqui </h1>";


for($i=0;$i<$numero;$i++)
{
    echo $variable."<br>";
}

?>


<?php
echo "</body>";

echo "</html>";

?>

