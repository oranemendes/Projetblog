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
    <title>Orane MUA - Littérature</title>
</head>

<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php
require_once '../database.php';
?>

<header class="header"><?php include('../includes/header.php') ?></header>

<div class="page">

    <nav><?php include('../includes/nav.php') ?> </nav>

    <?php
    $req = $db->query('SELECT * FROM article WHERE category = "litterature" ORDER BY id DESC');
    $articles = $req->fetchAll();

    foreach ($articles as $article): ?>


        <div class="container">
            <div class="row">
                <div class="card" class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                    <img class="card-img-top" src="<?= $article['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title"><?= $article['name'] ?></h3>
                        <a href="#" class="btn btn-primary">Lire l'article</a>
                        <p class="card-text"><?= $article['content'] ?></p>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach ?>

    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>


</html>