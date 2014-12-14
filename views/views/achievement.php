<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- achievement -->
<section id="achievement" style="background:url(<?= $achievments['image']; ?>) no-repeat;" class="bg-image bg-white bg-orange">
    <div class="container">
        <div class="row">
            <?= $achievments['content']; ?>
        </div>
    </div>
</section><!-- achievement -->