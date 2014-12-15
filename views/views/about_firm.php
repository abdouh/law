<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- about-our-firm -->
<section id="about-our-firm" class="bg-color bg-white"> 
    <div class="container">
        <div class="row">
            <h1 class="title text-center wow zoomIn"><?= $phrases['about_our_firm']; ?></h1>
            <!-- our-skill -->
            <div class="col-lg-6 col-sm-6 col-sm-6 col-xs-12 wow fadeInLeft">
                <div class="our-skill">
                    <?= $about_firm['introduction']; ?>
                    <!-- skill-bar -->
                    <div class="skill-bar">
                        <div class="animation fadeInUp">
                            <div class="h-default-themed">
                                <?= $about_firm['skill_bar']; ?>
                            </div>
                        </div>
                    </div><!-- skill-bar -->
                </div>
            </div><!-- our-skill -->

            <!-- ceo-message -->
            <div class="col-lg-6 col-sm-6 col-sm-6 col-xs-12 wow fadeInRight">
                <?= $about_firm['ceo_message']; ?>
            </div><!-- ceo-message -->
        </div> 
        <!-- row -->
        <div class="row">
            <!-- about-tab -->
            <div class="col-lg-6 col-sm-6 col-sm-6 col-xs-12 wow fadeInLeft">
                <div class="about-tab">
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <?= $about_firm['about_tabs']['list']; ?>
                    </ul>

                    <div class="tab-content">
                        <?= $about_firm['about_tabs']['content']; ?>
                    </div>

                </div>
            </div><!-- about-tab -->

            <!-- about-accordion -->
            <div class="col-lg-6 col-sm-6 col-sm-6 col-xs-12 wow fadeInRight">
                <div class="about-accordion">
                    <!-- Accordion -->
                    <div class="faq-cat-content">
                        <div class="panel-group" id="accordion">
                            <?= $about_firm['about_accordion']; ?>
                        </div>

                    </div>
                </div>
            </div><!-- about-accordion -->
        </div><!-- row -->
    </div>
</section><!-- /about-our-firm -->
