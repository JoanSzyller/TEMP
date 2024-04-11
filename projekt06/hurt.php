 <?php

//require('./data.php');
include('./site/data.php');

?>

<?php
if (isset($_POST['submit'])) {
    $loginUser = $_POST['login'];
    $passUser = $_POST['pass'];
    if ($login == $loginUser && $pass == $passUser) {
        session_start();
    }
}

?>

<?php
    // setcookie("user","Admin", time()+300, "/");
    // echo $_COOKIE["user"];
?>

<?php include './site/header.php'; ?>
    <!-- <h1>Projekt 06</h1> -->

    <!-- <a href="./../index.php"><button>Start</button></a> -->

    <!-- <a href="./detal.php"><button>Cennik detaliczny</button></a> -->

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Cennik hurtowy</h1>
            </div>
        <div>
    </div>

    <?php 
        // sprawdzam czy jestem niezalogowany
        // echo session_status();
        if (!isset($_POST['submit']) || session_status() == PHP_SESSION_NONE) {
           // echo $_POST['submit'] . "<br>";
           // echo session_status();
    ?>
    <div class="container">
        <div class="row">
            <div class="col alert alert-secondary">
                Żeby zobaczyć cennik hurtowy musisz być zalogowany.
            </div>
        </div>
    </div>

    <?php } ?>

    <?php
        if (isset($_POST['submit'])) {
            $loginUser = $_POST['login'];
            $passUser = $_POST['pass'];
            if ($login == $loginUser && $pass == $passUser) {
                // session_start();
                // echo session_status();
                // $_SESSION['id'] ='123456789';
                $_SESSION['user'] = $loginUser;
                setcookie("loginUser", $loginUser, time()+120, "/");
                // echo $_SESSION['id'];
                // echo session_id();

// echo "Tajna informacja – CENNIK";
    ?>

        <h3 class="text-center">Witaj, <?php echo $_COOKIE["loginUser"]; ?> na stronie z cennikiem hurtowym.</h3>

        <div class="container">
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
                        echo round($towary[$i][2], 2);
                        echo " zł";
                        echo "</div>";
                    echo "</div>";
                }            
            ?>
            </div>
        </div>
    
    <?php
        } else {
                echo "<h2 class=\"text-center\">Błędny login lub hasło.</h2>";
            }
        } else  {
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="hurt.php" method="POST">
                    <div>
                        <label style="width = 30px" for="login">Login:</label>                       
                        <input type="text" name="login" id="login">
                    </div>
                    <div>
                        <label for="pass">Password: </label>  
                        <input type="password" name="pass" id="pass">
                    </div>
                    <div>
                        <input type="submit" name="submit" id="submit" value="Login">
                        <input type="reset" value="Cancel">
                    </div>
                </form>    
            </div>
        </div>
    </div>

    <?php } ?>        

<?php include './site/footer.php'; ?>
