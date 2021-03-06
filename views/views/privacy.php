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
                        <!-- Post -->
                        <div class="post-item">
                            <!-- Post Title -->
                            <h2 class="wow fadeInLeft"><?= $privacy['title']; ?></h2>
                            <div class="post wow fadeInUp">

                                <div class="post-content wow fadeInUp">	
                                    <?= $privacy['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Post -->	
                </div><!-- Blog Left Side Ends -->
            </div>
        </div>
    </section><!-- Our Blog Section Ends -->


    <? include 'footer.php'; ?>

    <? include 'scripts.php'; ?>

</body>
</html>