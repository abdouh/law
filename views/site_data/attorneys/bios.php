<?php

$data = array();

/**
 * Charles P. Romaker
 */
$data[1]['image'] = 'charles-romaker.jpg';
$data[1]['link'] = 'charles-romaker'; //This will be the link of the bio i.e romakerlaw.com/bios/charles-romaker/
$data[1]['head_content'] = <<<HERE
<h4>Charles P. Romaker</h4>
<p>Charles P. Romaker has over twenty years experience litigating personal injury and workers' compensation matters.</p>
<p>Phone: (312) 377-7000</p>
<p>Fax: (312) 345-1940</p>
HERE;

$data[1]['main_content'] = <<<HERE
<h2>Summary</h2>
<h4>Charles Romaker is the principal of The Romaker Law Firm. Over the years, he has litigated and tried numerous motor vehicle cases, medical malpractice cases, slip and fall cases as well a hundreds of workers' compensation cases.</h4>

<h2>Experience</h2>
<h4>Using unique theories and strategies, Charles has successfully litigated personal injury matters with verdicts and settlements of $3.7 million, $2.7 million, and $1.2 million as well as worker's compensation settlements of $500,000, $400,000 and numerous cases settled in excess of $300,000.</h4>

<h2>Background</h2>
<h4>Charles has a diverse educational and professional background. Prior to a career in the law, he studied abroad in Madrid, Spain and earned an MA degree in Linguistics and ESL. Charles then taught for eight years prior to attending The John Marshall Law School. In law school, Charles was a member of the Law Review, and participated in the International Law Moot Court and Insurance Law Moot Court programs. For recreation, Charles has completed numerous triathlons as well as 5k and 10k races.</h4>
HERE;

/*
 * Below are the bio sections and you can add as many sections as you want, all you 
 * have to do is to copy the same structure and paste it underneath and change the index (number) of the bio
 * and change the content to the new content you want
 * take care not to change the first index of the current bio person unless you're adding another full bio
 * 
 */
$data[1]['bio_section'][1]['title'] = 'Education';
$data[1]['bio_section'][1]['content'] = <<<HERE
<li><h4>The John Marshall Law School, J.D., 1992</h4></li>
<li><h4>Eastern Michigan University, M.A., 1985</h4></li>
<li><h4>Bowling Green State University, B.A., 1980</h4></li>
HERE;

$data[1]['bio_section'][2]['title'] = 'BAR / COURT ADMISSIONS';
$data[1]['bio_section'][2]['content'] = <<<HERE
<li><h4>Illinois</h4></li>
<li><h4>U.S. District Court, Northern District of Illinois</h4></li>
<li><h4>U.S. Court of Appeals, Seventh Circuit</h4></li>
HERE;

$data[1]['bio_section'][3]['title'] = 'HONORS / AWARDS';
$data[1]['bio_section'][3]['content'] = <<<HERE
<li><h4>Chicago Bar Association Vanguard Award, 2010</h4></li>
<li><h4>President of the Puerto Rican Bar Association, 2010 to 2012</h4></li>
HERE;

$data[1]['bio_section'][4]['title'] = 'PROFESSIONAL AFFILIATIONS';
$data[1]['bio_section'][4]['content'] = <<<HERE
<li><h4>Illinois State Bar Association</h4></li>
<li><h4>Illinois Trial Lawyers Association</h4></li>
<li><h4>Chicago Bar Association</h4></li>
<li><h4>Workers' Compensation Lawyers Association</h4></li>
<li><h4>Puerto Rican Bar Association, Board Member</h4></li>
HERE;

$data[1]['bio_section'][5]['title'] = 'LANGUAGES';
$data[1]['bio_section'][5]['content'] = <<<HERE
<li><h4>Spanish</h4></li>
HERE;

//END OF Charles P. Romaker BIO





/**
 * Tod Allswang
 */
$data[2]['image'] = 'tod-allswang.jpg';
$data[2]['link'] = 'tod-allswang'; //This will be the link of the bio i.e romakerlaw.com/bios/charles-romaker/
$data[2]['head_content'] = <<<HERE
<h4>Tod Allswang</h4>
<p>Tod Allswang focuses his practice on the litigation of workers' compensation matters.</p>
<p>Email: t.allswang@romakerlaw.com</p>
<p>Phone: (312) 377-7000</p>
<p>Fax: (312) 345-1940</p>
HERE;

$data[2]['main_content'] = <<<HERE
<h2>Summary</h2>
<h4>Tod Allswang practices in the areas of personal injury and workers' compensation law. Mr. Allswang has only represented the injured person since he has been in practice. Throughout those years, he has secured millions of dollars for his clients. In addition to obtaining his clients' cash awards, Mr. Allswang knows how important it is to make sure his clients receive their weekly benefits in a timely manner and that their medical care is approved.</h4>

<h2>Experience</h2>
<h4>Mr. Allswang has experience in personal injury matters from a simple rear-end car accident to a catastrophic wrongful death suit against one of the biggest national railroad lines.  He has handled thousands of workers’ compensation claims as simple as a finger injury to claims involving permanent total disability.</h4>
<h4>He takes great pride in advocating for workers' treated unfairly and denied their benefits because of fabricated defenses.  In one such case, Mr. Allswang obtained a decision that included an award of penalties and attorney fees in excess of $150,000.00, when a union tuck pointer fell from a scaffold.  The employer took the position that the accident never happened.  In a similar type of case, Mr. Allswang, was also awarded penalties and fees when an undocumented worker, who was paid in cash,   amputated three fingers while using a table saw.  In that case, the employer went so far as to deny that the individual even worked for the construction company.  Mr. Allswang secured for that client: the payment of all his lost time from work, the payment of all his medical, an award for his injuries, and an award of penalties.</h4>

<h2>Background</h2>
<h4>Mr. Allswang was raised by a single mother who managed to raise two children and keep a house serving food and drinks.  Mr. Allswang worked as a laborer from the age of 16 to 24.  Those past experiences aid in his current practice as he knows how precarious financial stability can be and how important it is to secure his clients benefits as quickly as the legal system will allow.</h4>
HERE;

/*
 * Bio Sections
 */
$data[2]['bio_section'][1]['title'] = 'Education';
$data[2]['bio_section'][1]['content'] = <<<HERE
<li><h4>The John Marshal Law School, J.D., cum laude, 2001</h4></li>
<li><h4>University of Kansas, B.A., 1992</h4></li>
HERE;

$data[2]['bio_section'][2]['title'] = 'BAR / COURT ADMISSIONS';
$data[2]['bio_section'][2]['content'] = <<<HERE
<li><h4>Illinois</h4></li>
<li><h4>U.S. District Court, Northern District of Illinois</h4></li>
HERE;

//END Tod Allswang BIO




/**
 * Patrick Serowka
 */
$data[3]['image'] = 'patrick-serowka.jpg';
$data[3]['link'] = 'patrick-serowka'; //This will be the link of the bio i.e romakerlaw.com/bios/charles-romaker/
$data[3]['head_content'] = <<<HERE
<h4>Patrick Serowka</h4>
<p>Patrick Serowka focuses his practice on workers' compensation and personal injury matters.</p>
<p>Email: pserowka@romakerlaw.com</p>
<p>Phone: (312) 377-7000</p>
<p>Fax: (312) 345-1940</p>
HERE;

$data[3]['main_content'] = <<<HERE
<h2>Summary</h2>
<h4>Patrick Serowka is recognized as an aggressive advocate for injured workers in Illinois. He has achieved notable victories at the Arbitration, Commission and Circuit Court levels. During the course of his career, Patrick has secured over $13 million for injured workers in decisions and settlements.</h4>
<h4>Clients remark that Patrick keeps them well informed of the progress of their case and personally returns their calls. Patrick takes great pride in recovering large amounts for his clients, regardless of the difficulty of the case.</h4>

<h2>Experience</h2>
<h4>Patrick has substantial experience achieving favorable results as a litigator. For example, he is responsible for winning one of the largest awards in Illinois history for specified loss of the arm (65% loss) as well as returning the man to the full duties of his pre-injury position as a long-haul truck driver. Wisneski v. Ruan Trucking, 06 IL.W.C. 47802, 10 I.W.C.C. 1278, 2010 WL 5584553, (Ill. Indus. Com'n. Dec. 23, 2010). Patrick has also secured appellate affirmation of full benefits for clients' injuries, including one sustained in a parking lot not owned or maintained by the employer.</h4>
<h4>Before the Illinois Workers' Compensation Commission, Patrick has litigated hundreds of matters involving:</h4>
<ul>
<li><h4>Undocumented workers</li>
<li><h4>Parking Lot Falls</h4></li>
<li><h4>Spinal Cord Injury & Rehabilitation</h4></li>
<li><h4>Knee & Shoulder injuries</h4></li>
<li><h4>Hand, Arm & Elbow</h4></li>
<li><h4>Foot & Ankle</h4></li>
<li><h4>Ocular Trauma</h4></li>
<li><h4>Complex Regional Pain Syndrome</h4></li>
<li><h4>Vestibular Disorder</h4></li>
<li><h4>Occupational Exposure</h4></li>
<li><h4>Occupational acceleration of congenital disorders (ALS, Cancer)</h4></li>
</ul>

<h2>Background</h2>
<h4>Patrick's dedication to working men and women is inspired by his father's career as a maintenance engineer/union official and his mother's dedication as a nurse in helping others. His first job was as a short order cook at age 13. Thereafter, he worked in a variety of service and labor jobs which financed his college education. Prior to entering law school, he worked in business, insurance and finance.</h4>
HERE;

/*
 * Bio Sections
 */
$data[3]['bio_section'][1]['title'] = 'Education';
$data[3]['bio_section'][1]['content'] = <<<HERE
<li><h4>The John Marshall Law School, J.D., 2006</h4></li>
<li><h4>DePaul University, B.S., 1997</h4></li>
HERE;

$data[3]['bio_section'][2]['title'] = 'BAR / COURT ADMISSIONS';
$data[3]['bio_section'][2]['content'] = <<<HERE
<li><h4>Illinois</h4></li>
<li><h4>U.S. District Court, Northern District of Illinois</h4></li>
HERE;

$data[3]['bio_section'][3]['title'] = 'PROFESSIONAL AFFILIATIONS';
$data[3]['bio_section'][3]['content'] = <<<HERE
<li><h4>Illinois State Bar Association</h4></li>
<li><h4>Illinois Trial Lawyers Association</h4></li>
<li><h4>Chicago Bar Association</h4></li>
<li><h4>Will County Bar Association</h4></li>
HERE;

//END Patrick Serowka BIO



/**
 * Fernando Bustamante
 */
$data[4]['image'] = 'fernando-bustamante.jpg';
$data[4]['link'] = 'fernando-bustamante'; //This will be the link of the bio i.e romakerlaw.com/bios/charles-romaker/
$data[4]['head_content'] = <<<HERE
<h4>Fernando Bustamante</h4>
<p>Fernando Bustamante focuses his practice on the litigation of personal injury matters.</p>
<p>Phone: (312) 377-7000</p>
<p>Fax: (312) 345-1940</p>
HERE;

$data[4]['main_content'] = <<<HERE
<h2>Summary</h2>
<h4>Fernando M. Bustamante's practice is concentrated in civil litigation. Mr. Bustamante has extensive experience in a wide range of negligence and tort cases. He has vigorously and successfully litigated cases to favorable resolutions through settlement or trial.</h4>
<h4>Before joining The Romaker Law Firm, Mr. Bustamante represented insurance companies and corporations in personal injury cases, and individuals and businesses in commercial litigation. He brings the benefit of his long experience representing defendants to The Romaker Law Firm where he now puts all of his knowledge and effort into protecting the rights of people injured by the carelessness of others.</h4>

<h2>Experience</h2>
<h4>Mr. Bustamante's experience includes representing clients in motor vehicle collisions, premises liability, construction negligence, products liability, nursing home negligence, transportation, Federal Employers Liability Act, civil rights violations, and commercial disputes.</h4>
HERE;

/*
 * Bio Sections
 */
$data[4]['bio_section'][1]['title'] = 'Education';
$data[4]['bio_section'][1]['content'] = <<<HERE
<li><h4>DePaul University College of Law, J.D., 1991</h4></li>
<li><h4>University of Illinois, Urbana-Champaign, B.A., 1988</h4></li>
HERE;

$data[4]['bio_section'][2]['title'] = 'BAR / COURT ADMISSIONS';
$data[4]['bio_section'][2]['content'] = <<<HERE
<li><h4>Illinois</h4></li>
<li><h4>U.S. District Court, Northern District of Illinois</h4></li>
HERE;

//END Fernando Bustamante BIO





/**
 * Lorena Hernandez
 */
$data[5]['image'] = 'lorena-hernandez.jpg';
$data[5]['link'] = 'lorena-hernandez'; //This will be the link of the bio i.e romakerlaw.com/bios/charles-romaker/
$data[5]['head_content'] = <<<HERE
<h4>Lorena Hernandez</h4>
<p>Lorena Hernandez focuses her practice on the litigation of workers' compensation matters.</p>
<p>Email: lhernandez@romakerlaw.com</p>
<p>Phone: (312) 377-7000</p>
<p>Fax: (312) 345-1940</p>
HERE;

$data[5]['main_content'] = <<<HERE
<h2>Summary</h2>
<h4>Lorena Hernandez uses her extensive litigation expertise to zealously represent injured workers before the Illinois Worker's Compensation Commission. Prior to joining The Romaker Law Firm, Lorena was an advocate for clients in federal bankruptcy-related matters, ensuring that they were granted the protection afforded by the law.</h4>

<h2>Experience</h2>
<h4>Lorena Hernandez has experience in successfully litigating hundreds of matters in before U.S. district courts. As a worker's compensation attorney, she uses her litigation expertise to advocate for employees who have been denied deserved compensation for a wide array of injuries. Lorena has had matters before the following courts:</h4>
<ul>
<li><h4>U.S. District Court - Northern District of Illinois</li>
<li><h4>Illinois Circuit Court - Cook County</h4></li>
<li><h4>Illinois Workers' Compensation Commission</h4></li>
</ul>

<h2>Background</h2>
<h4>Lorena was born in Chicago and raised by immigrant parents. Her experiences as a first-generation American have made her sensitive to the needs of this underrepresented community. In her spare time, Lorena dedicates herself to giving back to the community through different organizations, including the Legal Aid Society and Chicago Volunteer Legal Services.  She also enjoys running, attending music concerts, and exploring the city through its many events.</h4>
HERE;

/*
 * Bio Sections
 */
$data[5]['bio_section'][1]['title'] = 'Education';
$data[5]['bio_section'][1]['content'] = <<<HERE
<li><h4>The John Marshall Law School, J.D., 2011</h4></li>
<li><h4>DePaul University, B.A., 2006</h4></li>
HERE;

$data[5]['bio_section'][2]['title'] = 'BAR / COURT ADMISSIONS';
$data[5]['bio_section'][2]['content'] = <<<HERE
<li><h4>Illinois</h4></li>
<li><h4>U.S. District Court, Northern District of Illinois</h4></li>
HERE;

$data[5]['bio_section'][3]['title'] = 'PROFESSIONAL / COMMUNITY AFFILIATIONS';
$data[5]['bio_section'][3]['content'] = <<<HERE
<li><h4>Illinois State Bar Association</h4></li>
<li><h4>Chicago Bar Association</h4></li>
<li><h4>Hispanic Lawyers Association of Illinois</h4></li>
HERE;

$data[5]['bio_section'][4]['title'] = 'LANGUAGES';
$data[5]['bio_section'][4]['content'] = <<<HERE
<li><h4>Spanish</h4></li>
HERE;

//END Lorena Hernandez BIO





return $data;
