<style>
    .post-content h4{
        line-height: 1.2cm;
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

                <?= $bio['head']; ?>

                <?= $bio['content']; ?>

            </div><!-- Blog Left Side Ends -->


            <!-- Blog Sidebar Begins -->
            <div class="col-md-4">

                <div class="sidebar">
                    <?= $bio['side']; ?>
                </div>

            </div><!-- Blog Sidebar Ends -->

        </div>

    </div>
</section><!-- Our Blog Section Ends -->