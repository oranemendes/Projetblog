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
?>

<div class="page">
<header class="header"><?php include('../includes/header.php') ?></header>
<nav><?php include('../includes/nav.php') ?> </nav>

        <?php
        $req = $db->query('SELECT * FROM article ORDER BY id DESC ');
        $articles = $req->fetchAll();

        foreach ($articles as $article): ?>
        <section class="articleblog">
            <h1><?= $article['name'] ?></h1>

            <p><?= $article['content'] ?></p>
            <p>Publié par <?= $article['autor'] ?> le <?= $article['date'] ?></p>
        </section>
        <?php endforeach ?>


<footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>


</html>