<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

$n1=(int)26;
$n2=(string)"je suis un  entier :";


    function Comparer($chaine,$chaine2){
      return $chaine2.$chaine;
    }
    echo Comparer($n1,$n2);
    
    ?>
</body>
</html>