<?php
if (!defined('WEB'))
    header('Location: /error404');
?>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="romaker law firm, attorney, lawyer, chicago, illinois, workers compensation, personal injury, employment rights" />
    <meta name="description" content="The Romaker Law Firm is dedicated the exclusive representation of plaintiffs and petitioners in all matters of workers' compensation, personal injury, and employment rights.">
    <meta name="author" content="Romaker Law Firm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ROMAKER | <?= $title; ?></title>
    <link rel="shortcut icon" href="<?= TEMPLATE_URL; ?>/images/favicon.png">
    <!-- Bootstrap -->
    <link href="<?= TEMPLATE_URL; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Main CSS -->
    <link href="<?= TEMPLATE_URL; ?>/css/style.css" rel="stylesheet" media="screen">
    <!-- theme color css -->
    <link href="<?= TEMPLATE_URL; ?>/css/orange.css" rel="stylesheet" media="screen">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
              <script src="<?= TEMPLATE_URL; ?>/js/respond.js"></script>
    <![endif]-->
    <script>

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {

                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)

        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');



        ga('create', 'UA-58517984-1', 'auto');

        ga('send', 'pageview');
    </script>

</head>