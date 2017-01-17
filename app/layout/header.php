<!DOCTYPE html>
<html>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=TITLE?></title>
        <meta name="description" content="<?=DESC?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="copyright" content="webStarter"> <!-- Client name -->
        <meta name="designer" content="Crafthouse - Digital agency"> <!-- You/Your company name -->

        <!-- FACEBOOK -->
        <meta property="og:image" content="website-absolute-url/img/social/faceook-banner.jpg">
        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:type" content="website">
        <meta property="og:description" content="">
        <meta property="og:url" content="">

        <link href="favicon.ico" rel="icon">
        <!--[if IE]>
            <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
            <link href="favicon.ico" rel="icon" type="image/x-icon">
        <![endif]-->

        <!-- Website creators -->
        <link href="humans.txt" rel="author">

        <!-- Google+ -->
        <link href="https://plus.google.com/+CrafthouseAgency" rel="publisher">

        <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
        <link href="css/core/core.css" rel="stylesheet">
        <?php if (defined('CSS')): ?>
            <?php foreach (CSS as $css): ?>
                <link href="css/pages/<?=$css?>" rel="stylesheet">
            <?php endforeach ?>
        <?php endif ?>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security when browsing the internet.</p>
        <![endif]-->
        <a class="skip-link screen-reader-text" href="#content">Skip menu</a> <!-- For keyboards users to skip directly to content -->
        <header class="site-header">
            <nav class="main-nav">
                <div class="social-icons">
                    <a class="social-link" href="https://plus.google.com/+CrafthouseAgency" target="_blank">
                        <svg class="google-icon" width="16" height="16">
                            <use xlink:href="img/svg-system.svg#google"></use>
                        </svg>
                    </a>
                    <a class="social-link" href="https://www.facebook.com/crafthousedk" target="_blank">
                        <svg class="google-icon" width="16" height="16">
                            <use xlink:href="img/svg-system.svg#facebook"></use>
                        </svg>
                    </a>
                    <a class="social-link" href="https://www.linkedin.com/company/crafthouse" target="_blank">
                        <svg class="google-icon" width="16" height="16">
                            <use xlink:href="img/svg-system.svg#linkedin"></use>
                        </svg>
                    </a>
                </div>
                <ul>
                    <li>
                        <a class="link menu-link" href="#">docs</a>
                    </li>
                    <li>
                        <a class="link menu-link" href="#">srouce code</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
