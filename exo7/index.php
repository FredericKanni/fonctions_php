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




  







    $age =(int)18;
    $gender =(string)"homme";




    function Personne($chaine,$chaine2){

        if ($chaine < 18 AND  $chaine2 == "homme")
            {
                return "Vous êtes un homme et vous êtes mineur";
            }
        
        elseif ($chaine >= 18 AND  $chaine2 == "homme")
            {
                return "Vous êtes un homme et vous êtes majeur";
            }
        
        elseif ($chaine < 18 AND  $chaine2 == "femme")
            {
                return "Vous êtes une femme et vous êtes mineur";
            
            }
        
        else
            {
                return "Vous êtes une femme et vous êtes majeur";
            }

    }

echo Personne($age,$gender);


    
    ?>
</body>
</html>