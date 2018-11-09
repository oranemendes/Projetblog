<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style-smallscreen.css" />
    <link rel="stylesheet" type="text/css" href="../css/style-mediumscreen.css" />
    <link rel="stylesheet" type="text/css" href="../css/style-largescreen.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylenav.css" />
    <title>Orane MUA - Connexion</title>
</head>

<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php
require_once '../database.php';
/*if (!$_SESSION['admin']){
    header('location:login.php');
}*/
?>

<div class="page">
    <header class="header"><?php include('../includes/header.php') ?></header>
    <nav><?php include('../includes/nav.php') ?> </nav>

    <section class="articleblog">

        <h3>Se connecter :</h3>
        <?php
        if (isset($_POST) AND !empty($_POST)){
            if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))){
                $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
                $req->execute([
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                ]);
                $user = $req->fetchObject();
                if ($user){
                    $_SESSION['admin'] = $_POST['username'];
                    header('location:indexadmin.php');
                }else{
                    $error = 'Identifiants incorrects';
                }
            }
            else{
                $error = 'Veuillez remplir tous les champs !';
            }
        }
        if (isset($error)){
            echo '<div class="error">'. $error .'</div>';
        }
        ?>
        <form action="login.php" method="POST">
            <input type="text" name="username" />
            <input type="password" name="password" />
            <button>Connexion</button>
        </form>

    </section>

    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>