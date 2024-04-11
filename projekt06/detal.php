<?php

//require('./data.php');
include('./site/data.php');

?>

<?php include './site/header.php'; ?>  

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Cennik detaliczny</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col box_items">
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
            ?>
            </div>
        </div>
    </div>

<?php include './site/footer.php'; ?>