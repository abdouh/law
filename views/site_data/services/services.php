<?php

$data = array();

$data[1]['icon'] = 'fa-usd';  //You can change the service icon to font awesome icons found at http://fortawesome.github.io/Font-Awesome/icons/
$data[1]['has_page'] = 'yes';  //if yes then provide the link of the service (found in site_data/services/pages.php) below
$data[1]['link'] = 'workers-comp';
$data[1]['title'] = "Worker's Compensation";
$data[1]['content'] = <<<HERE
<p>For over 20 years, we have represented injured workers in all types of workers' compensation matters in and around Chicago, from Waukeegan to Joliet to the Loop.</p>
HERE;




$data[2]['icon'] = 'fa-medkit';
$data[2]['has_page'] = 'yes';   //if yes then provide the link of the service (found in site_data/services/pages.php) below
$data[2]['link'] = 'personal-injury';
$data[2]['title'] = "Personal Injury";
$data[2]['content'] = <<<HERE
<p>Whether it's a motor vehicle accident, a slip-and-fall injury, or negligence, we fight to ensure that our clients are adequately compensated for any injuries caused by others.</p>
HERE;




return $data;
