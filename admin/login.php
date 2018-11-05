<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylenav.css" />
    <title>Orane MUA - Main page</title>
</head>

<body>

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