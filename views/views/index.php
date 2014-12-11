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

            <? include 'services_offered.php'; ?>

            <? include 'achievement.php'; ?>

            <? include 'attorneys.php'; ?>

            <? include 'testimonial.php'; ?>

            <? include 'news.php'; ?>

            <? include 'contact.php'; ?>

            <? include 'map.php'; ?>

            <? include 'footer.php'; ?>
        <? } ?>
        <script src="<?= TEMPLATE_URL; ?>/js/jquery-2.1.1.min.js"></script><!-- Jquery -->
        <script src="<?= TEMPLATE_URL; ?>/js/bootstrap.min.js"></script>	<!-- Bootstrap -->
        <script src="<?= TEMPLATE_URL; ?>/js/jquery.inview.min.js"></script><!-- Inview JS -->
        <script src="<?= TEMPLATE_URL; ?>/js/wow.min.js"></script>  <!-- Wow animation -->
        <script src="<?= TEMPLATE_URL; ?>/js/jquery.bxslider.min.js"></script>  <!-- Bx Slider -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script><!-- Map Api -->
        <script src="<?= TEMPLATE_URL; ?>/js/gmaps.js"></script>  <!-- Gmap JS -->
        <script src="<?= TEMPLATE_URL; ?>/js/script.js"></script>  <!-- Script -->
        <script src="<?= TEMPLATE_URL; ?>/js/script-home.js"></script>  <!-- Script JS -->
    </body>
</html>