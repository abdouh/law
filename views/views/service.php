<?php
if (!defined('WEB'))
    header('Location: /error404');
if ($_GET['lang'] == 'es') {
    include 'lang-es.php';
    $blog_link = READ_ONLY . '/blog-es';
    $lang_link = READ_ONLY . '/';
} else {
    include 'lang-en.php';
    $blog_link = READ_ONLY . '/blog';
    $lang_link = READ_ONLY . '/es/';
}
?>
<!DOCTYPE html>
<html>

    <? include 'head.php'; ?>

    <body>

        <? include 'header.php'; ?>

        <? include 'service_comp.php'; ?>

        <? include 'footer.php'; ?>

        <? include 'scripts.php'; ?>

    </body>
</html>