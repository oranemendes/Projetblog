<?php

    require_once('../database.php');

    $req = $db->prepare('INSERT INTO article (name, image, content, autor, category, date) VALUES (?, ?, ?, ?, ?, NOW())');
    $req->execute(array($_POST['articlename'], $_POST['articleimage'], $_POST['articlecontent'], $_POST['articleautor'], $_POST['category']));

    header('Location: indexadmin.php');

 ?>