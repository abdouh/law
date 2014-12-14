<?php

Class indexController Extends baseController {

    public function index() {
        $this->registry->template->success = false;
        if ($_POST) {
            if (isset($_POST['site_pass']) && $_POST['site_pass'] == 'romaker7008') {
                $_SESSION['site_pass'] = 'romaker7008';
                $this->registry->template->success = true;
            } else {
                $this->registry->template->msg = 'Wrong Pass! Please try again';
            }
        } else if (isset($_SESSION['site_pass']) && $_SESSION['site_pass'] == 'romaker7008') {
            $this->registry->template->success = true;
        }

        $this->registry->template->slider_items = $this->prepare_slider();
        $this->registry->template->about_firm = $this->prepare_about_firm();
        $this->registry->template->case_resolving = $this->prepare_case_resolving();
        $this->registry->template->services = $this->prepare_services();
        $this->registry->template->achievments = $this->prepare_achievments();
        $this->registry->template->attorneys = $this->prepare_attorneys();
        $this->registry->template->testimonials = $this->prepare_testimonials();
        $this->registry->template->show('index');
    }

    public function captcha() {
        $this->registry->template->show('securimage_show');
    }

    protected function prepare_slider() {
        $images = TEMPLATE_URL . '/site_data/slider/images/';

        //load slider items
        $data = include SITE_DATA . '/slider/slider_items.php';
        $output = '';
        foreach ($data as $array) {
            $modified['image'] = $images . $array['image'];
            $modified['text'] = $array['text'];
            $output .= Temp::get_template($modified, 'slider_item') . "\n";
        }

        return $output;
    }

    protected function prepare_about_firm() {
        $images = TEMPLATE_URL . '/site_data/about_firm/images/';

        //load introduction
        $introduction_output = include SITE_DATA . '/about_firm/introduction.php';

        //load skill bar items
        $skill_bar = include SITE_DATA . '/about_firm/skill_bar.php';
        $skill_bar = include SITE_DATA . '/about_firm/skill_bar.php';
        $skill_bar_output = '';
        foreach ($skill_bar as $data) {
            $skill_bar_output .= $data . "\n";
        }

        //load ceo_message
        $ceo_message = include SITE_DATA . '/about_firm/ceo_message.php';

        $ceo_message['ceo_message_image'] = $images . $ceo_message['ceo_message_image'];
        $ceo_message['ceo_image'] = $images . $ceo_message['ceo_image'];
        $ceo_message_output = Temp::get_template($ceo_message, 'ceo_message') . "\n";

        //load about tabs
        $about_tabs = include SITE_DATA . '/about_firm/about_tabs.php';
        $about_tabs_output = array();
        $about_tabs_output['list'] = '';
        $about_tabs_output['content'] = '';
        foreach ($about_tabs as $index => $array) {
            $array['active'] = ($index == 1) ? 'active' : '';
            $about_tabs_output ['list'] .= Temp::get_template($array, 'about_tab_list') . "\n";
            $about_tabs_output ['content'] .= Temp::get_template($array, 'about_tab_content') . "\n";
        }

        //load about accordion
        $about_accordion = include SITE_DATA . '/about_firm/about_accordion.php';
        $about_accordion_output = '';
        foreach ($about_accordion as $index => $array) {
            $array['class1'] = ($index == 1) ? 'down' : 'right';
            $array['class2'] = ($index == 1) ? 'in' : '';
            $array['accord_num'] = $index;
            $about_accordion_output .= Temp::get_template($array, 'about_accordion') . "\n";
        }

        //prepare output
        $output['introduction'] = $introduction_output;
        $output['skill_bar'] = $skill_bar_output;
        $output['ceo_message'] = $ceo_message_output;
        $output['about_tabs'] = $about_tabs_output;
        $output['about_accordion'] = $about_accordion_output;
        return $output;
    }

    protected function prepare_case_resolving() {
        $data = include SITE_DATA . '/case_resolving/content.php';
        $data['image'] = TEMPLATE_URL . '/site_data/case_resolving/images/background.jpg';
        return $data;
    }

    protected function prepare_services() {
        //load services
        $data = include SITE_DATA . '/services/services.php';
        $output = '';
        foreach ($data as $index => $array) {
            $array['offset'] = ($index == 1) ? 'col-lg-offset-3' : '';
            if ($array['has_page'] == 'yes') {
                $array['link'] = READ_ONLY . '/services/' . $array['title'];
                $array['element_link'] = "<a href='{$array['link']}'>Read more</a>";
            } else {
                $array['link'] = '#services_offered';
                $array['element_link'] = '';
            }

            $output .= Temp::get_template($array, 'services') . "\n";
        }

        return $output;
    }

    protected function prepare_achievments() {
        //load achievments
        $data = include SITE_DATA . '/achievments/achievments.php';
        $output['content'] = '';
        foreach ($data as $index => $array) {
            $output['content'] .= Temp::get_template($array, 'achievment') . "\n";
        }
        $output['image'] = TEMPLATE_URL . '/site_data/achievments/images/background.jpg';
        return $output;
    }

    protected function prepare_attorneys() {
        $images = TEMPLATE_URL . '/site_data/attorneys/images/';

        //load attorneys
        $data = include SITE_DATA . '/attorneys/attorneys.php';
        $output = array();
        $output['lead_attorney'] = '';
        $output['attorneys'] = '';

        $link = '<a href=":link" style="color:#E88855;font-size:18px;">Read More</a>';
        $facebook = '<li><a href=":facebook"><i class="fa fa-facebook"></i></a></li>';
        $twitter = '<li><a href=":twitter"><i class="fa fa-twitter"></i></a></li>';
        $email = '<li><a href="mailto::email"><i class="fa fa-envelope-o"></i></a></li>';




        foreach ($data as $index => $array) {
            $array['image'] = $images . $array['image'];
            $array['link'] = empty($array['link']) ? '' : str_replace(':link', READ_ONLY . '/bio/' . $array['link'], $link);
            $array['facebook'] = empty($array['facebook']) ? '' : str_replace(':facebook', $array['facebook'], $facebook);
            $array['twitter'] = empty($array['twitter']) ? '' : str_replace(':twitter', $array['twitter'], $twitter);
            $array['email'] = empty($array['email']) ? '' : str_replace(':email', $array['email'], $email);

            if ($index == 1) {
                $array['class'] = 'col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3';
                $output['lead_attorney'] .= Temp::get_template($array, 'attorney') . "\n";
            } else {
                $array['class'] = 'col-lg-3 col-md-4 col-sm-6';
                $output['attorneys'] .= Temp::get_template($array, 'attorney') . "\n";
            }
        }

        return $output;
    }

    protected function prepare_testimonials() {
        $images = TEMPLATE_URL . '/site_data/testimonials/images/';
        //load testimonials
        $data = include SITE_DATA . '/testimonials/content.php';
        $output['content'] = '';
        foreach ($data as $index => $array) {
            $array['active'] = ($index == 1) ? 'active' : '';
            $array['image'] = $images . $array['image'];
            $output['content'] .= Temp::get_template($array, 'testimonial') . "\n";
        }
        $output['image'] = $images . 'background.jpg';
        return $output;

        $to = $user['email'];

        $subject = 'ط¹ط¶ظˆظٹط© ط¬ط¯ظٹط¯ط© ظپظ‰ ظ…ظˆظ‚ط¹ pets-service';

        $headers = "From: " . strip_tags('pets@pets-services.com') . "\r\n";
        $headers .= "Reply-To: " . strip_tags('info@pets-services.com') . "\r\n";
        //$headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = <<<HERE
     <div dir="rtl" id=":qo" class="a3s" style="overflow: hidden;font-size:16px;">
<b>ظ…ط±ط­ط¨ط§ {$user['username']}</b><br>
<br>
ظ…ط±ط­ط¨ط§ ط¨ظƒ ظپظ‰ ظ…ظˆظ‚ط¹ ط¨ظٹطھط³ ط³ظٹط±ظپظٹط³ط³ ط§ظ„ط®ط§طµ ط¨ط­ظٹظˆط§ظ†ط§طھظƒ ط§ظ„ط£ظ„ظٹظپط© ط§ظ„ظ…ظپط¶ظ„ط©, ظ„ظ‚ط¯طھظ… طھط³ط¬ظٹظ„ ط¹ط¶ظˆظٹطھظƒ ط¨ظ†ط¬ط§ط­ ظˆ ظ†طھظ…ظ†ظ‰ ط£ظ† ظٹط­ط§ط² ظپط±ظٹظ‚ ط§ظ„ط¹ظ…ظ„ ط«ظ‚طھظƒظ… ط¨ظ†ط§<br>
<br>
ظٹظ…ظƒظ†ظƒ ط§ظ„ط¯ط®ظˆظ„ ط§ظ„ظ‰ ط§ظ„ظ…ظˆظ‚ط¹ ظ…ظ† ظ‡ظ†ط§ <a target="_blank" href="http://www.pets-services.com">pets-services.com</a>
<br>
------------------------------<wbr>------------<br>
<br>
<b>ظ…ط¹ طھط­ظٹط§طھ ظپط±ظٹظ‚ ط¹ظ…ظ„ ط¨ظٹطھط³ ط³ظٹط±ظپظٹط³ط³</b><br>
</div></div>       
HERE;

        mail($to, $subject, $message, $headers);
    }

}
