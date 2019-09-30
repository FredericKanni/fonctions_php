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

$nom=(string)"kanni" ;
$prenom=(string)"frederic";
$age=(int)26;


    function Soi($chaine,$chaine2,$chaine3){
      return "Bonjour   $chaine  $chaine2  ,tu as  $chaine3 ans";
    }
    echo Soi($nom,$prenom,$age);
    
    ?>
</body>
</html>