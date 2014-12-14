<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<style>
    .post-content h4{
        line-height: 1.1cm;
        padding-top: 50px;
    }
    .post-content h5{
        line-height: .8cm;
    }
    .post-content h2{
        padding-top: 50px;
    }
</style>
<!-- Blog Section Begins -->
<section id="blog" class="blog single section">
    <div class="container">
        <div class="row">
            <!-- Blog Left Side Begins -->
            <div class="col-md-8">

                <?= $service['content']; ?>

            </div><!-- Blog Left Side Ends -->


            <!-- Blog Sidebar Begins -->
            <div class="col-md-4">

                <div class="sidebar">
                    <?= $service['side']; ?>
                </div>

            </div><!-- Blog Sidebar Ends -->

        </div>

    </div>
</section><!-- Our Blog Section Ends -->