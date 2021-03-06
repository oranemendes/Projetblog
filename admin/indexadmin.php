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
    <title>Orane MUA - Administration</title>
</head>

<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
        <h1>Bienvenue <?= $_SESSION['admin'] ?> !</h1>
        <p class="separate">-</p>

        <h1>Publier un nouvel article</h1>

            <form method="post" action="traitementarticle.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Titre</label>
                        <input type="text" class="form-control" name="articlename" id="articlename" placeholder="Titre de l'article">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Image</label>
                        <input type="text" class="form-control" name="articleimage" id="articleimage"
                        value="https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Contenu</label>
                    <textarea type="text" class="form-control" name="articlecontent" id="articlecontent" placeholder="Contenu de l'article"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Auteur</label>
                        <input type="text" class="form-control" name="articleautor" id="articleautor" placeholder="Auteur">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Catégorie</label>
                        <select name="category" id="category" class="form-control">
                            <option selected>Sélectionnez ..</option>
                            <option value="blog">Blog</option>
                            <option value="lookbook">Look Book</option>
                            <option value="makeup">Make-up</option>
                            <option value="vlog">Vlog</option>
                            <option value="litterature">Littérature</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="cineseries">Ciné - séries</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </form>


    </section>

    <footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>

