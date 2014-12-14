<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- case-resolving -->
<section id="case-resolving" style="background:url(<?= $case_resolving['image']; ?>) no-repeat;" class="text-center bg-image bg-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12">
                <?= $case_resolving['content']; ?>
            </div>
        </div>
    </div>
</section><!-- /case-resolving -->
