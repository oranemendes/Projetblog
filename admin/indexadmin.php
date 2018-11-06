<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylenav.css" />
    <title>Orane MUA - Administration</title>
</head>

<body>

<?php
    require_once '../database.php';
    if (!$_SESSION['admin']){
        header('location:login.php');
    }
?>

<div class="page">
    <header class="header"><?php include('../includes/header.php') ?></header>
    <nav><?php include('../includes/nav.php') ?> </nav>

    <section class="articleblog">
        <h1>Espace administrateur</h1>
        <h3>Bienvenue <?= $_SESSION['admin'] ?></h3>

        <h1>Publier un nouvel article</h1>

        <form method="post" action="traitementarticle.php">
            <input type="text" name="articlename" id="articlename" placeholder="Titre" required autofocus />
            <label for="category">Catégorie</label>
            <select name="category" id="category" required>
                <option value="blog">Blog</option>
                <option value="lookbook">Look Book</option>
                <option value="makeup">Make-up</option>
                <option value="vlog">Vlog</option>
                <option value="litterature">Littérature</option>
                <option value="lifestyle">Lifestyle</option>
                <option value="cineseries">Ciné - séries</option>
            </select>
            <input type="text" name="articleautor" id="articleautor" placeholder="Auteur" required />
            <br />
            <textarea name="articlecontent" id="articlecontent" required>Contenu de l'article</textarea>
            <br />
            <input type="submit" value="Poster l'article" />


        </form>

    </section>

    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>

