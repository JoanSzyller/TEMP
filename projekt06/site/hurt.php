 <?php

//require('./data.php');
include('./data.php');

?>

<!-- <?php
    setcookie("user","Admin", time()+300, "/");
    echo $_COOKIE["user"];
?> -->

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cennik hurtowy</title>
    <link rel="stylesheet" href="./../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./../CSS/style.css">
</head>
<body>
    <h1>Projekt 06</h1>

    <a href="./../index.php"><button>Start</button></a>

    <a href="./detal.php"><button>Cennik detaliczny</button></a>

    <?php
        if (isset($_POST['submit'])) {
            $loginUser = $_POST['login'];
            $passUser = $_POST['pass'];
            if ($login == $loginUser && $pass == $passUser) {
                session_start();
                $_SESSION['id'] ='123456789';
                $_SESSION['user'] = $loginUser;
                setcookie("loginUser", $loginUser, time()+120, "/");
                echo $_SESSION['id'];
                echo session_id();

// echo "Tajna informacja – CENNIK";
    ?>
        <h3>Witaj, <?php echo $_COOKIE["loginUser"]; ?> na stronie z cennikiem hurtowym.</h3>
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
            // echo $towary[1][1];
            // echo "<br> Długość tablicy: " . $dlugosc;
        ?>
        </div>
    
    <?php
        } else {
                echo "<h2>Błędny login lub hasło.</h2>";
            }
        } else  {
    ?>
        <form action="hurt.php" method="POST">
        <div>
            Login: <input type="text" name="login" id="login">
        </div>
        <div>
            Password: <input type="password" name="pass" id="pass">
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="Login">
            <input type="reset" value="Cancel">
        </div>

        </form>    
    <?php
        }
    ?>        

    <script src="./../js/bootstrap.min.js"></script> 
    <script src="./../JS/script.js"></script>

</body>
</html>