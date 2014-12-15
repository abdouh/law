<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- services-offered -->
<section id="services-offered" class="text-center bg-color bg-mulled-wine">
    <div class="container">
        <div class="row">
            <h1 class="title wow zoomIn"><?= $phrases['services_offered']; ?></h1>
            <?= $services; ?>
        </div>
    </div>
</section><!-- /services-offered -->
