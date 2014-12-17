<?php
if (!defined('WEB'))
    header('Location: /error404');
if ($_GET['lang'] == 'es') {
    include 'lang-es.php';
    $blog_link = READ_ONLY . '/blog-es';
    $home_link = READ_ONLY . '/es/';
} else {
    include 'lang-en.php';
    $blog_link = READ_ONLY . '/blog';
    $home_link = READ_ONLY . '/';
}
?>
<!DOCTYPE html>
<html>

    <? include 'head.php'; ?>

    <body>

        <? include 'header.php'; ?>

        <? include 'bio_comp.php'; ?>

        <? include 'footer.php'; ?>

        <? include 'scripts.php'; ?>

    </body>
</html>