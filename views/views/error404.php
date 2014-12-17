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


        <!-- Blog Section Begins -->
        <section id="blog" class="blog single section">
            <div class="container">
                <div class="row">
                    <!-- Blog Left Side Begins -->
                    <div class="col-md-8">
                        <!-- Author Section -->
                        <div class="author wow fadeInUp">
                            <!-- Image -->
                            <img src="<?= TEMPLATE_URL; ?>/images/404.jpg" alt="" />
                            <div class="author-comment">
                                <h3>Error 404</h3>
                                <p>Sorry, the page you're looking for do not exist. <a href="<?= $home_link; ?>">Back to home.</a></p>
                            </div>						
                            <div class="clear"></div>							
                        </div><!-- Author Section Ends-->
                    </div><!-- Blog Left Side Ends -->
                </div>
            </div>
        </section><!-- Our Blog Section Ends -->


        <? include 'footer.php'; ?>

        <? include 'scripts.php'; ?>

    </body>
</html>