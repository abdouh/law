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
                            <li class="scroll <?= empty($link) ? 'active' : ''; ?>"><a href="<?= $link; ?>#header"><?= $phrases['home']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#about-our-firm"><?= $phrases['about_us']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#services-offered"><?=$phrases['services_offered'];?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#team-of-lawyers"><?=$phrases['our_lawyers'];?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#how-to-reach-us"><?=$phrases['contact_us'];?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#our-location"><?=$phrases['how_to_reach_us'];?></a></li>
                            <li><a href="<?= $blog_link; ?>"><?=$phrases['blog'];?></a></li>
                            <li><a href="<?= $lang_link; ?>"><?=$phrases['lang'];?></a></li>
                        </ul>
                    </div>
                </div><!-- /navbar -->
            </div>
        </div>
    </div>
</header><!-- /header -->

