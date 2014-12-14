<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- header -->
<header id="header" class="clearfix">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-sm-3" style="">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?= READ_ONLY; ?>">
                            <img style="max-width:200%;" src="<?= TEMPLATE_URL; ?>/images/logo-black.png" alt="Romaker Law Firm">
                        </a>

                    </div>
                </div>
                <!-- logo -->
                <!-- navbar -->
                <div class="col-sm-10 np" style="position:relative; left:20%;">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="scroll <?= empty($link) ? 'active' : ''; ?>"><a href="<?= $link; ?>#header">home</a></li>
                            <li class="scroll"><a href="<?= $link; ?>#about-our-firm">about us</a></li>
                            <li class="scroll"><a href="<?= $link; ?>#services-offered">services offered</a></li>
                            <li class="scroll"><a href="<?= $link; ?>#team-of-lawyers">our lawyers</a></li>
                            <li class="scroll"><a href="<?= $link; ?>#how-to-reach-us">contact us</a></li>
                            <li class="scroll"><a href="<?= $link; ?>#our-location">how to reach us</a></li>
                            <li><a href="<?= $link; ?>#">blog</a></li>
                            <li><a href="<?= $link; ?>#">Español</a></li>
                        </ul>
                    </div>
                </div><!-- /navbar -->
            </div>
        </div>
    </div>
</header><!-- /header -->

