<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/StyleLinkStack.css">
    <title>Link Stack</title>

    <script>

    </script>

</head>

<body id="body" align="center">


    <?php

        $Alfabeto = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $key = "LS-";
        //echo ($Alfabeto[mt_rand(0,52)]);
        for ($i=0; $i < 2; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                $key = $key.$Alfabeto[mt_rand(0,51)];
            }
            $key = $key."-";
        }
        $key = $key.$Alfabeto[mt_rand(0,51)];
        $key = $key.$Alfabeto[mt_rand(0,51)];
        echo($key);
    ?>

</body>
</html>
