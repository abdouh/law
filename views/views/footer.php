<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- footer -->
<section id="footer" class="bg-color bg-gray">
    <div class="container text-center">

        <!-- social -->
        <div class="social">
            <h3 class="wow fadeInRight"><?= $phrases['stay_connected']; ?></h3>
            <ul class="list-inline">
                <li class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="700ms">
                    <p><br> <br> <a id="bbblink" class="ruhzbul" style="display: block; position: relative; overflow: hidden; width: 200px; height: 90px; margin: 0px; padding: 0px;" title="Charles P. Romaker, P.C., Attorneys &amp; Lawyers, Chicago, IL" href="http://www.bbb.org/chicago/business-reviews/attorneys-and-lawyers/charles-p-romaker-pc-in-chicago-il-88535647#bbbseal" target="_blank"><img id="bbblinkimg" style="padding: 0px; border: none;" src="http://seal-chicago.bbb.org/logo/ruhzbul/charles-p-romaker-pc-88535647.png" alt="Charles P. Romaker, P.C., Attorneys &amp; Lawyers, Chicago, IL" width="400" height="90"></a></p>
                    <script type="text/javascript">// <![CDATA[
                        var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-chicago.bbb.org' + unescape('%2Flogo%2Fcharles-p-romaker-pc-88535647.js') + "' type='text/javascript'%3E%3C/script%3E"));
                        // ]]></script>
                    <script src="http://seal-chicago.bbb.org/logo/charles-p-romaker-pc-88535647.js" type="text/javascript"></script>
                    <script src="http://seal-chicago.bbb.org/logo/charles-p-romaker-pc-88535647.js" type="text/javascript"></script>
                    <p><a href="http://www.avvo.com/attorneys/60606-il-charles-romaker-1093252.html?cm_mmc=Avvo-_-Avvo_Badge-_-Micro-_-1093252" rel="me"><img id="avvo_badge" src="http://www.avvo.com/assets/microbadge.png" alt="Avvo - Rate your Lawyer. Get Free Legal Advice."></a></p>
                </li>
            </ul>
            <ul class="list-inline">
                <li class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="500ms"><a target="_blank" href="http://facebook.com/RomakerLawfirm"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="700ms"><a target="_blank" href="http://twitter.com/Romaker312"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div><!-- social -->

        <p class="copyright wow fadeInRight">&copy; <?= $phrases['copy_right']; ?></p>
        <p class="copyright wow fadeInRight"><a href="/disclaimer"><?= $phrases['legal_disclaimer']; ?></a> - <a href="/privacy"><?= $phrases['privacy_policy']; ?></a></p>
        <h6 class="copyright wow fadeInRight"><a href="mailto:dev.abstract@gmail.com?subject=Consultation%20Request">By Abstract</a></h6>
    </div>
</section><!-- /footer -->