<?php
if (!defined('WEB'))
    header('Location: /error404');
if ($_GET['lang'] == 'es') {
    include 'lang-es.php';
    $blog_link = READ_ONLY . '/blog-es';
    $lang_link = READ_ONLY . '/';
    $form_link = READ_ONLY . '/es/sendemail';
} else {
    include 'lang-en.php';
    $blog_link = READ_ONLY . '/blog';
    $lang_link = READ_ONLY . '/es/';
    $form_link = READ_ONLY . '/sendemail';
}
?>
<!DOCTYPE html>
<html>

    <? include 'head.php'; ?>

    <body>
        <? if (!$success) { ?>
            <div class="row">
                <form method="post" action="">
                    <div class="col-md-12 col-sm-12 col-sm-12 col-xs-12">
                        <div class="form-group col-lg-offset-5 col-sm-5 subject-field" style="color:black;">
                            ENTER SITE PASSWORD
                        </div>
                        <div class="form-group col-lg-offset-5 col-sm-5 subject-field" style="color:red;">
                            <?= $msg; ?>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-offset-3 col-sm-6 subject-field">
                                <input type="password" id="subject" name="site_pass" class="form-control" required="required">

                            </div>
                        </div>
                        <div class="form-group col-lg-offset-5">
                            <button type="submit" class="btn">ENTER</button>
                        </div>
                    </div>
                </form>
            </div>
        <? } else { ?>
            <? include 'header.php'; ?>

            <? include 'slider.php'; ?>

            <? include 'about_firm.php'; ?>

            <? include 'case_resolving.php'; ?>

            <? include 'services.php'; ?>

            <? include 'achievement.php'; ?>

            <? include 'attorneys.php'; ?>

            <? include 'testimonial.php'; ?>

            <? //include 'news.php'; ?>

            <? include 'contact.php'; ?>

            <? include 'map.php'; ?>

            <? include 'footer.php'; ?>
        <? } ?>

        <? include 'scripts.php'; ?>

    </body>
</html>