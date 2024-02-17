<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php +html </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h1>Html + PHP</h1>


<?php  
$numero= 10;
$nombre = "Fabian";

$botton_texto = $_GET["botton"];



for($i=0;$i<$numero;$i++)
{
    echo $nombre."<br>";
    echo "<button class='btn btn-primary'>".$botton_texto."</button>";
}

?>

<button class="btn btn-primary"> <?php echo $botton_texto?></button>


</body>
</html>