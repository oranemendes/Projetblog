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
    <title>Orane MUA - Index</title>
</head>

<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../js/infinitescroll.js"></script>

<?php
    require_once '../database.php';
?>

    <div class="top">
        <header class="header"><?php include('../includes/header.php') ?></header>
        <nav><?php include('../includes/nav.php') ?> </nav>
    </div>

<div class="content">
    <div class='on'><div class='inner'>
            <?php

            $req = $db->query('SELECT * FROM article ORDER BY id DESC');
            $articles = $req->fetchAll();

            foreach ($articles as $article): ?>
                <section class="articleblog">
                    <h1><?= $article['name'] ?></h1>
                    <p class="separate">-</p>

                    <figure><img class="mainimage" src="<?= $article['image'] ?>"</figure>
                    <p><?= $article['content'] ?></p>
                    <p>Publié par <?= $article['autor'] ?> le <?= $article['date'] ?></p>
                </section>

            <?php endforeach ?>
        </div>
    </div>

</div>


<footer class="footer"><?php include('../includes/footer.php') ?></footer>


</body>


</html>
