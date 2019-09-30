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

$n1="26";
$n2="27";


    function Comparer($chaine,$chaine2){
       
        if($chaine == $chaine2 ){
            return "Les deux nombres sont identiques";
        }
        elseif($chaine > $chaine2 )
        {return "Le premier nombre est plus grand";}
        else
        {return " Le premier nombre est plus petit";}

       

    }

    echo Comparer($n1,$n2);
    
    ?>
</body>
</html>