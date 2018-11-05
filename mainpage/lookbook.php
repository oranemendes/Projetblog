<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylenav.css" />
    <title>Orane MUA - Look Book</title>
</head>

<body>

<?php
require_once '../database.php';
?>

<div class="page">
    <header class="header"><?php include('../includes/header.php') ?></header>
    <nav><?php include('../includes/nav.php') ?> </nav>

    <?php
    $req = $db->query('SELECT * FROM article WHERE category = "lookbook"');
    $articles = $req->fetchAll();

    foreach ($articles as $article): ?>

        <div class="row">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                        <img src="images/sample-1.jpg">
                        <span class="card-title"><?= $article['name'] ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $article['content'] ?></p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>


    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>


</html>