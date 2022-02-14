<?php
    $paragrafo='sotto la panca la capra canta, sopra la panca la capra crepa';
    $word=$_GET["word"];
    $soldi= 140;
    $divisorio=explode(" ",$paragrafo);
    $nome="arturo";
    $cognome="vidal";
    var_dump($divisorio);
    $superSegretoFikissimo="ciaone";
    $currentYear= date("Y");
    $myYear=1985; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $paragrafo; ?> <?php echo strlen($paragrafo) ?></h1>
    <?php echo str_replace($word,"***",$paragrafo) ?> <br>
    <?php echo $soldi ?> <br>
    <?php echo $nome . " "; echo $cognome?> <br>
    <h3>L'anno corrente è <?php echo $currentYear?>, la mia età è: <?php echo $currentYear - $myYear ?></h3>
    <script>
        alert("<?php echo $paragrafo ?>");
        alert("ciao mamma");
    </script>
</body>


</html>