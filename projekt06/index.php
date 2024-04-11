<?php
    // echo $_COOKIE["user"];
    // ustawienie sesji
    session_start();
    // echo $_SESSION['id'];
    
    // usuniecie zmiennych sesji
    session_unset();

    // usunięcie sesji
    session_destroy();

    echo session_id();

?>    
<!--  $_SESSION['login'] == $_POST['login']; -->
<!--  $_SESSION['id'] = sesssion_id; -->
<?php include './site/header.php'; ?>

    <div class="container">
            <div class="row">
                <h1 class="text-center">Sklep komputerowy</h1>
            <div>
        </div>

<?php include './site/footer.php'; ?>


