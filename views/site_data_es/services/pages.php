<?php

$data = array();

/**
 * Worker's Compensation
 */
$data[1]['image'] = 'workers-comp.jpg';
$data[1]['link'] = 'workers-comp'; //This will be the link of the bio i.e romakerlaw.com/service/workers-comp/
$data[1]['title'] = "Worker's Compensation";
$data[1]['content'] = <<<HERE
<h4>Your physical health and ability to work is essential to the financial support of your family. We see, first-hand, how insurance companies will limit access to quality healthcare and force an injured worker back to work before its' medically appropriate. This can negatively impact your ability to earn a living and your rights under the Illinois Workers' Compensation Act.</h4>

<h4>At The Romaker Law Firm, we aggressively fight to keep you in control of your medical care, to ensure timely weekly workers' compensation benefits, and to maximize the value of your injuries once your doctor releases you to work. We pride ourselves on winning substantial recoveries in cases where the prior lawyer repeatedly delayed the case or pressured the worker to accept a modest sum to close their case. Further, we promise to keep you informed of the progress of your case, each step of the way.</h4>

<h4>If you have ever been injured at work, you probably have questions, such as:</h4>
<ul>
<li><h5>Can I be forced back to work before my doctor releases me to full duty?</h5></li>
<li><h5>Do I have to treat with my employer's doctor?</h5></li>
<li><h5>Do I have to accept the low settlement offer from the insurance company?</h5></li>
<li><h5>What if my employer won't follow my doctor's light-duty restrictions?</h5></li>
</ul>

<h4>To answer these and other questions you may have, do not hesitate to call us at (312) 377-7000 for a free and confidential case evaluation. There is also no fee to hire us - attorneys' fees and costs only apply if we are successful in winning your case.</h4>
HERE;

/*
 * Below are the service sections and you can add as many sections as you want, all you 
 * have to do is to copy the same structure and paste it underneath and change the index (number) of the service
 * and change the content to the new content you want
 * take care not to change the first index of the current service unless you're adding another full service
 * 
 */
$data[1]['service_section'][1]['title'] = 'CAUSES OF ACTION';
$data[1]['service_section'][1]['content'] = <<<HERE
<li><h4>Repetitive Trauma</h4></li>
<li><h4>Spinal Cord injuries</h4></li>
<li><h4>Knee & Shoulder injuries</h4></li>
<li><h4>Hand, Arm & Elbow injuries</h4></li>
<li><h4>Foot & Ankle injuries</h4></li>
<li><h4>Ocular Trauma</h4></li>
<li><h4>Complex Regional Pain Syndrome</h4></li>
<li><h4>Vestibular Disorder</h4></li>
<li><h4>Occupational Exposure</h4></li>
<li><h4>Carpal Tunnel Syndrome</h4></li>
<li><h4>Undocumented Workers</h4></li>
<li><h4>Parking Lot Falls</h4></li>
<li><h4>Rehabilitation</h4></li>
HERE;

//END OF Worker's Compensation SERVICE





/**
 * Personal Injury
 */
$data[2]['image'] = 'personal-injury.jpg';
$data[2]['link'] = 'personal-injury'; //This will be the link of the bio i.e romakerlaw.com/service/workers-comp/
$data[2]['title'] = "Personal Injury";
$data[2]['content'] = <<<HERE
<h4>Any injury can have a detrimental impact on all facets of your life. An injury can affect everything from the way you interact with others to the types of jobs you can perform. Thus, when someone injures you, either intentionally or negligently, it's only fair that they should have to pay for that injury, including treatment, rehabilitation, and compensation. However, not everyone is willing to pay. This is why you will need an attorney, who can represent your interests and force that individual, company, or insurance company to compensate you for the injury they caused.</h4>

<h4>The Romaker Law Firm can provide that service for you. We have represented clients in personal injury matters for more than twenty years. Our firm has successfully prosecuted numerous verdicts and settlements in motor vehicle cases, premises liability cases, nursing home cases and other injury matters. Our firm's focus is to obtain the maximum settlement or verdict for each of our clients while counseling them during the pendency of their claims.</h4>

<h4>If someone has ever injured you, you probably have questions, such as:</h4>
<ul>
<li><h5>How do I get proper medical treatment and who pays for that treatment?</h5></li>
<li><h5>What do while I am unable to work after my accident?</h5></li>
<li><h5>What if I am never able to return to work after the accident?</h5></li>
<li><h5>What do the policy limits of insurance policies have to do with my case?</h5></li>
<li><h5>Do I have to accept the low settlement offer from the insurance company?</h5></li>
</ul>

<h4>To answer these and other questions you may have, do not hesitate to call us at (312) 377-7000 for a free and confidential case evaluation. There is also no fee to hire us - attorneys' fees and costs only apply if we are successful in winning your case.</h4>
HERE;


$data[2]['service_section'][1]['title'] = 'CAUSES OF ACTION';
$data[2]['service_section'][1]['content'] = <<<HERE
<li><h4>Medical Malpractice</h4></li>
<li><h4>Motor Vehicle Accidents</h4></li>
<li><h4>Nursing Home Negligence</h4></li>
<li><h4>Premises Liability</h4></li>
<li><h4>Products Liability</h4></li>
<li><h4>Slip and Fall</h4></li>
HERE;

//END OF Personal Injury SERVICE





return $data;
