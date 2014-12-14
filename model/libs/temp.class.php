<?php

class Temp {

    static function get_template($data, $temp_name) {
        $template = self::templates($temp_name);

        foreach ($data as $index => $value) {
            $template = str_replace(":$index", $value, $template);
        }
        return $template;
    }

    static function templates($temp_name) {
        $templates = array();

        $templates['slider_item'] = <<<HERE
    <!-- carousel item -->
    <div class="item">
        <img src=":image" width="1920" height="1080">
        <div class="carousel-caption">
            <div class="tb">
                <div class="tb-cell">
                    :text
                </div>
            </div>
        </div>					
    </div>
    <!-- carousel item -->
HERE;

        $templates['ceo_message'] = <<<HERE
                <div class="ceo-message">
                    <img src=":ceo_message_image" alt="CEO Measege" width="569" height="456">
                    <div class="ceo-overlay">
                        <img src=":ceo_image" class="col-lg-4">
                        <div class="message-content col-lg-8">
                            :ceo_message
                        </div>
                    </div>
                </div>
HERE;


        $templates['about_tab_list'] = <<<HERE
                        <li class=":active"><a href="#:tab_name" role="tab" data-toggle="tab">:tab_name</a></li>
HERE;

        $templates['about_tab_content'] = <<<HERE
                        <div class="tab-pane :active" id=":tab_name">
                           :tab_content
                        </div>
HERE;

        $templates['about_accordion'] = <<<HERE
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#section:accord_num">
                                        <h4 class="panel-title :active">
                                            :accordion_name
                                            <span class="pull-left"><i class="fa fa-angle-:class1"></i></span>
                                        </h4>
                                    </a>
                                </div>

                                <div id="section:accord_num" class="panel-collapse collapse :class2">
                                    <div class="panel-body">
                                        :accordion_content
                                    </div>
                                </div>
                            </div>
HERE;

        $templates['services'] = <<<HERE
            <!-- single-service -->
            <div class="col-lg-3 :offset col-sm-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1300ms" data-wow-delay="500ms">
                <div class="single-service">
                    <i class="fa :icon"></i>
                    <h3><a href=":link">:title</a></h3>
                    :content
                    :element_link
                </div>
            </div><!-- single-service -->
HERE;

        $templates['achievment'] = <<<HERE
            <!-- single-achievement -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow flipInY">
                <div class="single-achievement">
                    <div class="achievement-logo">
                        <i class="fa :icon"></i>
                    </div>
                    <div class="achievement-info">
                        <h2 class="timer">:statistic</h2>
                        <span>:title</span>
                    </div>
                </div>
            </div>
            <!-- single-achievement -->
HERE;

        $templates['attorney'] = <<<HERE
            <!-- member -->
            <div class=":class team_member wow fadeInRight" data-wow-duration="700ms" data-wow-delay="500ms">
                <div class="member">
                    <div class="member-image">
                        <img src=":image" alt=":name">
                        <div class="member-social">
                            <ul class="list-inline">
                                :facebook
                                :twitter
                                :email
                            </ul>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>:name</h3>
                        <span>:title</span>
                        :content
                        :link
                    </div>
                </div>
            </div><!-- /member -->
HERE;
        $templates['testimonial'] = <<<HERE
                        <!-- testimonial item -->
                        <div class="item :active">
                            <div class="col-sm-3">
                                <div class="client-image">
                                    <img src=":image" alt="Client">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="client-message">
                                    :content
                                </div>
                            </div>
                        </div><!-- testimonial item -->
HERE;
        
        $templates['bio_head'] = <<<HERE
                <!-- Author Section -->
                <div class="author wow fadeInUp">
                    <!-- Image -->
                    <img src=":image" alt="" />
                    <div class="author-comment">
                        :head_content
                    </div>						
                    <div class="clear"></div>							
                </div><!-- Author Section Ends-->
HERE;
        $templates['bio_content'] = <<<HERE
                <!-- Post -->
                <div class="post-item">
                    <div class="post wow fadeInUp">
                        <div class="post-content wow fadeInUp">
                            :main_content
                        </div>
                    </div>
                </div><!-- End Post -->	
HERE;
        $templates['bio_section'] = <<<HERE
                    <!-- Bio Section -->
                    <div class="category widget wow fadeInUp">
                        <!-- Title -->
                        <h2>:title</h2>
                        <ul class="category-list">
                            :content
                        </ul>
                    </div><!-- Bio Section Ends-->
HERE;
        
        $templates['service_content'] = <<<HERE
                <!-- Post -->
                <div class="post-item">
                    <!-- Post Title -->
                    <h2 class="wow fadeInLeft">:title</h2>
                    <div class="post wow fadeInUp">
                        <!-- Image -->
                        <img src=":image" alt="" />
                        <div class="post-content wow fadeInUp">	
                            :content
                        </div>
                    </div>
                </div><!-- End Post -->
HERE;
        
        return $templates[$temp_name];
    }

}
