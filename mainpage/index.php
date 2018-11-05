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

    <section class="articleblog">
    <h1>Lorem ipsum dolor sit amet</h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat
            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus
            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor
            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in
            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis
            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor
            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis
            faucibus leo, quis facilisis libero orci eget urna.<br />

            Sed sed ullamcorper nulla, at condimentum massa. Praesent sapien mi, varius nec felis sit amet, eleifend hendrerit nunc.
            Proin luctus pulvinar enim a ultricies. Pellentesque malesuada ipsum varius ullamcorper tristique. Phasellus in aliquet
            nunc. Nunc sed tempor nunc. Donec in lacus in metus varius dapibus ac aliquet mauris. Aliquam non aliquam tellus, a
            dapibus ex. Donec erat turpis, interdum vitae lectus eget, consequat cursus risus.<br />

            Suspendisse elementum consectetur mauris, ut mollis ante efficitur sit amet. Vivamus fermentum faucibus libero in
            consequat. Nam fringilla, odio varius dignissim rhoncus, turpis mi iaculis est, ut varius orci lorem ac risus.
            Praesent sit amet consequat urna. Fusce et eros in eros elementum dignissim non quis lacus. Morbi facilisis molestie
            urna. Phasellus eget dapibus ante. Maecenas sagittis, tellus sed tristique pulvinar, lorem ligula aliquam tellus,
            non rhoncus mi nisl a neque. Nullam ac venenatis nisl. Maecenas interdum mauris augue, et rutrum tortor vehicula sit
            amet. Ut ac vulputate nulla. Integer ut elit a tortor porta condimentum. Aenean sit amet quam eget orci consequat
            convallis non sed libero. Donec sodales aliquet orci et auctor. Mauris placerat, elit id cursus egestas, lectus nulla
            interdum nunc, in condimentum sem magna et augue.<br />

            Nullam sagittis varius elit, vitae dapibus lacus vestibulum fringilla. Etiam pharetra sollicitudin sem, quis blandit
            lacus auctor id. Aenean velit arcu, placerat ut hendrerit eget, sagittis quis purus. Aenean a mollis nulla, vel
            condimentum leo. Etiam auctor nec nisl sit amet sodales. Fusce ultrices ultricies diam eu vestibulum. Suspendisse vel
            venenatis lorem. Aliquam a posuere purus, id sagittis nunc. Fusce et ligula a ligula aliquet pulvinar. Nulla iaculis
            lorem sed tellus pellentesque, eget laoreet tortor sollicitudin. Suspendisse efficitur magna vel velit interdum, et
            venenatis diam euismod. Aliquam suscipit neque nec nisi interdum, at pellentesque urna malesuada.<br/>

            Nunc imperdiet in lectus quis pharetra. Vivamus eros diam, pellentesque sit amet sagittis et, vestibulum id metus.
            Phasellus aliquet erat tempor felis convallis ornare. Vivamus quis commodo enim, vel tincidunt magna. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet est dictum, ultrices elit eu, ullamcorper ipsum. Cras
            fringilla fermentum felis, non dignissim ante finibus eu. Integer varius, elit at facilisis tempor, urna mauris congue
            turpis, in sagittis turpis risus feugiat lorem. Praesent non ipsum a magna pretium faucibus. Sed egestas rutrum fringilla.
        </p>

        <?php
        $req = $db->query('SELECT * FROM article');
        $articles = $req->fetchAll();

        foreach ($articles as $article){
            echo $article['name'];
        }
        ?>
    </section>

<footer class="footer"><?php include('../includes/footer.php') ?></footer>
</div>

</body>


</html>