<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylenav.css" />
    <title>Orane MUA - Look Book</title>
</head>

<body>

<?php
require_once '../database.php';
?>

<header class="header"><?php include('../includes/header.php') ?></header>

<div class="page">

    <nav><?php include('../includes/nav.php') ?> </nav>

    <?php
    $req = $db->query('SELECT * FROM article WHERE category = "lookbook" ORDER BY id DESC');
    $articles = $req->fetchAll();

     foreach ($articles as $article): ?>

        <div class="container">
            <div class="card" class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title"><?= $article['name'] ?></h3>
                    <a href="#" class="btn btn-primary">Lire l'article</a>
                    <p class="card-text"><?= $article['content'] ?></p>
                </div>
            </div>
        </div>



    <?php endforeach ?>


    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>


</html>