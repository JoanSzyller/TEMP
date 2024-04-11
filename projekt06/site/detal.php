<?php

//require('./data.php');
include('./data.php');

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cennik detaliczny</title>
    <link rel="stylesheet" href="./../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./../CSS/style.css">
</head>
<body>

    <h1>Projekt 06</h1>

    <a href="./../index.php"><button>Start</button></a>

    <a href="./hurt.php"><button>Cennik hurtowy</button></a>



    <div class="box_items">
        <?php
            $dlugosc = count($towary);
            for($i=0; $i < $dlugosc; $i++) {
                echo "<div class=\"box_item\">";
                    echo "<div class=\"box\">";
                    echo $towary[$i][0];
                    echo "</div>";
                    echo "<div class=\"box\">";
                    echo $towary[$i][1];
                    echo "</div>";
                    echo "<div class=\"box\">";
                    echo round($towary[$i][2] * 1.23 * 1.1, 2);
                    echo " zł";
                    echo "</div>";
                echo "</div>";
            }            
            // echo $towary[1][1];
            // echo "<br> Długość tablicy: " . $dlugosc;

        ?>
    </div>

    <script src="./../js/bootstrap.min.js"></script> 
    <script src="./../JS/script.js"></script>

</body>
</html>