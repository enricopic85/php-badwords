<?php
    $paragrafo='sotto la panca la capra canta, sopra la panca la capra crepa';
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
   <h1> <?php echo $paragrafo;?>  <?php echo strlen($paragrafo) ?> </h1>
    <?php echo str_replace("capra","***",$paragrafo) ?>
</body>
</html>