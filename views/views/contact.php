<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- how-to-reach-us -->
<section id="how-to-reach-us" style="background:url(<?= TEMPLATE_URL; ?>/site_data/contact/images/background.jpg) no-repeat;" class="bg-image text-center bg-mulled-wine-rgba">
    <div class="container">
        <div class="row">
            <h1 class="title wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms"><?= $phrases['contact_us_now']; ?></h1>
            <h3 class="title wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms"><?= $phrases['free_case']; ?></h3>
            <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <!-- contact-form -->
                <form id="contact-form" class="contact-form" name="contact-form" method="post" action="">
                    <h1 class="show-on-success lead" style="display:none;"></h1>
                    <h1 class="show-on-error lead" style="display:none;"></h1>
                    <h1 id="contact_success" style="display:none;"><?= $phrases['contact_success']; ?></h1>
                    <h1 id="contact_processing" style="display:none;"><?= $phrases['contact_processing']; ?></h1>
                    <h1 id="contact_link" style="display:none;"><?= $form_link; ?></h1>
                    <div class="row">
                        <div class="form-group col-sm-6 name-field">
                            <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Your Name">
                        </div>

                        <div class="form-group col-sm-6 email-field">
                            <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Your email address">
                        </div>

                        <div class="form-group col-sm-6 subject-field">
                            <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Subject">
                        </div>
                        <div class="form-group col-sm-3 subject-field">
                            <input type="text" id="captcha" name="captcha" class="form-control" required="required" placeholder="Enter Code">
                        </div>
                        <div class="form-group col-sm-3 subject-field">
                            <img id="captcha_img" src="/index/captcha" alt="CAPTCHA Image" />
                            <a href="#" style="color:#fff;" onmouseover="this.style.color ='#E88855';" onmouseout="this.style.color ='#fff';" 
                               onclick="document.getElementById('captcha_img').src = '/index/captcha?' + Math.random();return false">Change</a>
                        </div>


                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your message"></textarea>
                    </div> 
            </div>				                                   
            <div class="form-group">
                <button type="submit" class="btn wow fadeInRight">Submit</button>
                <div id="our-location"></div>
            </div>
            </form>	<!-- contact-form -->
        </div>
    </div>
</div>
</section><!-- how-to-reach-us -->
