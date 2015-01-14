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
                            <img id="logo-int" style="max-width:200%;" src="<?= TEMPLATE_URL; ?>/images/logo-black.png" alt="Romaker Law Firm">
                        </a>

                    </div>
                </div>
                <!-- logo -->
                <div dir="rtl" style="font-weight:bold;color:#39536c;padding-right:10%;">
                    <a style="color:#39536c;" href="<?= READ_ONLY; ?>/">English</a> | <a style="color:#39536c;" href="<?= READ_ONLY; ?>/es/">Español</a>
                </div>
                <!-- navbar -->
                <div class="col-sm-12 np" style="">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" style="padding-left:180px;">
                            <li class="scroll <?= empty($link) ? 'active' : ''; ?>"><a href="<?= $link; ?>#header"><?= $phrases['home']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#about-our-firm"><?= $phrases['about_us']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#services-offered"><?= $phrases['services_offered']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#team-of-lawyers"><?= $phrases['our_lawyers']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#how-to-reach-us"><?= $phrases['contact_us']; ?></a></li>
                            <li class="scroll"><a href="<?= $link; ?>#our-location"><?= $phrases['how_to_reach_us']; ?></a></li>
                            <li><a href="<?= $blog_link; ?>"><?= $phrases['blog']; ?></a></li>
                        </ul>
                    </div>
                </div><!-- /navbar -->
            </div>
        </div>
    </div>
</header><!-- /header -->

