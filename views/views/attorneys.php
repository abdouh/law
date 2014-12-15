<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<!-- team-of-lawyers -->
<section id="team-of-lawyers" class="bg-color bg-mulled-wine text-center">
    <div class="container">
        <div class="row">
            <h1 class="title wow fadeInRight"><?= $phrases['our_team_of_lawyers']; ?></h1>
            <?= $attorneys['lead_attorney']; ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= $attorneys['attorneys']; ?>
        </div>
    </div>
</section><!-- team-of-lawyers -->