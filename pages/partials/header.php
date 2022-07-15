<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Get Article Meta -->
        <?php 
            if(($page == 'blog') AND ($article)) {
                 $blogMeta = mysql_query("SELECT * FROM blog WHERE slug = '$article'");
                while($row = mysql_fetch_array($blogMeta))
                {
                    $blog_meta_title = $row['title'];
                    $meta_title = $blog_meta_title . ' | Haptic Recruit';
                    $blog_meta_slug = $row['slug'];
                    $meta_description = $row['meta_description'];
                    $blog_meta_image = $row['image'];
                }
            }
        ?>

        <!-- Get Article Meta -->
        <?php 
            if(($page == 'our-gaming-hubs') AND ($article)) {
                 $blogMeta = mysql_query("SELECT * FROM hubs WHERE slug = '$article'");
                while($row = mysql_fetch_array($blogMeta))
                {
                    $blog_meta_title = $row['title'];
                    $meta_title = $blog_meta_title . ' | Gaming Relocation | Haptic Recruit';
                    $blog_meta_slug = $row['slug'];
                    $meta_description = $row['meta_description'];
                    $blog_meta_image = $row['image'];
                }
            }
        ?>

        <!-- Get Job Meta -->
        <?php 
            if(($page == 'jobs') AND ($article)) {
                 $blogMeta = mysql_query("SELECT * FROM jobs WHERE slug = '$article'");
                while($row = mysql_fetch_array($blogMeta))
                {
                    $blog_meta_title = $row['title'];
                    $meta_title = $blog_meta_title . ' | Haptic Recruit';
                    $blog_meta_slug = $row['slug'];
                    $meta_description = $row['short_description'];
                    $blog_meta_image = $row['image'];
                }
            }
        ?>

        <title><?php echo $meta_title; ?></title>
        <meta name="description" content="<?php echo $meta_description; ?>">
        <meta name="keywords" content="haptic, recruit, jobs, careers, recruitment, gaming, games industry, recruitment agency" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="https://www.hapticrecruit.com/<?php if($page != "home") { echo $page; } ?><?php if($article != "") { echo "/$article"; } ?>">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,800|Roboto+Mono:400,700|Roboto:300,400,500,700" rel="stylesheet">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css?v=<?php echo rand(); ?>">

        <?php 
            if(($page == 'blog') AND ($article)) {

            ?>

                <!-- Share Article Page -->
                <meta property="fb:app_id" content="326080251372618" />
                <meta property="og:title" content="<?php echo $meta_title; ?>" />
                <meta property="og:type" content="article" />
                <meta property="og:url" content="https://www.hapticrecruit.com/blog/<?php echo $blog_meta_slug; ?>" />
                <?php if($blog_meta_image) {
                    ?>
                        <meta property="og:image" content="https://www.hapticrecruit.com<?php echo $blog_meta_image; ?>" />
                <?php
                    } else {
                    ?>
                        <meta property="og:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
                    <?php
                }
                ?>
                <meta property="og:description" content="<?php echo $meta_description; ?>" /> 
                
                <meta name="twitter:card" content="summary" />
                <meta name="twitter:site" content="@HapticRecruit" />
                <meta name="twitter:title" content="<?php echo $meta_title; ?>" />
                <meta name="twitter:description" content="<?php echo $meta_description; ?>" />
                
                <?php if($blog_meta_image) {
                    ?>
                        <meta name="twitter:image" content="https://www.hapticrecruit.com<?php echo $blog_meta_image; ?>" />
                <?php
                    } else {
                    ?>
                        <meta name="twitter:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
                    <?php
                }
                ?>
            <!-- Share Article Page -->
        <?php
            }elseif(($page == 'jobs') AND ($article)) {

            ?>

                <!-- Share AJobrticle Page -->
                <meta property="fb:app_id" content="326080251372618" />
                <meta property="og:title" content="<?php echo $meta_title; ?>" />
                <meta property="og:type" content="article" />
                <meta property="og:url" content="https://www.hapticrecruit.com/jobs/<?php echo $blog_meta_slug; ?>" />
                <?php if($blog_meta_image) {
                    ?>
                        <meta property="og:image" content="https://www.hapticrecruit.com<?php echo $blog_meta_image; ?>" />
                <?php
                    } else {
                    ?>
                        <meta property="og:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
                    <?php
                }
                ?>
                <meta property="og:description" content="<?php echo $meta_description; ?>" /> 
                
                <meta name="twitter:card" content="summary" />
                <meta name="twitter:site" content="@HapticRecruit" />
                <meta name="twitter:title" content="<?php echo $meta_title; ?>" />
                <meta name="twitter:description" content="<?php echo $meta_description; ?>" />
                <?php if($blog_meta_image) {
                    ?>
                        <meta name="twitter:image" content="https://www.hapticrecruit.com<?php echo $blog_meta_image; ?>" />
                <?php
                    } else {
                    ?>
                        <meta name="twitter:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
                    <?php
                }
                ?>

            <!-- Share Job Page -->
        <?php
            }else {
        ?>
            <!-- Share Standard Page -->
            <meta property="fb:app_id" content="326080251372618" />
            <meta property="og:title" content="<?php echo $meta_title; ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="https://www.hapticrecruit.com/<?php if($page !== 'home') {echo $page;} ?>" />
            <meta property="og:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
            <meta property="og:description" content="<?php echo $meta_description; ?>" /> 
            
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:site" content="@HapticRecruit" />
            <meta name="twitter:title" content="<?php echo $meta_title; ?>" />
            <meta name="twitter:description" content="<?php echo $meta_description; ?>" />
            <meta name="twitter:image" content="https://www.hapticrecruit.com/img/facebook_share.jpg" />
            <!-- Share Standard Page -->
        <?php
            }
        ?>

        <meta name="google-site-verification" content="G1JhoMY8ADOPVqnkWgFkgR45x_7nHyFgG4ldvSurIQQ" />
        <meta name="p:domain_verify" content="44ba9a4fd1ab9be00e85e005dd820b74"/>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    
        <!-- Strutured Data -->
        <?php
//             $array = [
//                 [
//                     "@context" =>  "http://schema.org",
//                     "@type"  => "JobPosting",
//                     "name" => "Mobile App Developer",
//                     'hiringOrganization'   => array(
//                     '@type'           => 'Organization',
//                     'name'            => 'Haptic Recruit',
//                     'sameAs'          => 'https://www.hapticrecruit.com',
//                     'logo'            => 'https://www.hapticrecruit.com/img/haptic_logo.png'
//                     ),
//                     'employmentType'=> 'FULL_TIME',
//                     'datePosted'=> '2016-02-21',
//                     'description'=> 'hello',
//                     'jobLocation'=> 'remote',
//                     'title'=> 'Mobile App Developer',
//                     'url'=> 'https://www.hapticrecruit.com'
//                 ]
//             ];

// //header('Content-type: application/json');
// //echo json_encode($array); // use json_encode($array, JSON_PRETTY_PRINT) for debugging
// echo '<script type="application/ld+json">' . json_encode($array) . '</script>';
?>

        <!-- Strutured Data -->
        
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#151839"
            },
            "button": {
              "background": "#e75118"
            }
          },
          "theme": "classic",
          "content": {
            "message": "Our website uses cookies to ensure you get the best experience. ",
            "href": "docs/haptic-privacy-policy.pdf"
          }
        })});
        </script>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PRLNPF9');</script>
<!-- End Google Tag Manager -->
    </head>
    <body <?php if($page !== 'home') { echo 'class="innerPage"';} else {}  ?> >
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRLNPF9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <div id="splashHero" style="display: none;">
            <div class="content">

                <div class="splash_logo" >
                    <div>
                        <img src="/img/haptic_logo.png" alt="Haptic logo">
                    </div>
                </div>

            </div>
        </div>

        <div id="mask"></div>
        <div id="closePopup"></div>
        

        <div id="navigation">
            <div class="content">
                <div id="closeNav">Close <img src="/img/icons/cancel.svg" alt="x"></div>
                <nav>
                    <ul>
                         <li class="<?php if($page == 'home' ) { echo 'active';}?>"><a href="/">Home</a></li>
                         <li class="<?php if($page == 'about-us' ) { echo 'active';}?>"><a href="/about-us">About us</a></li>
                         <li class="<?php if($page == 'client' ) { echo 'active';}?>"><a href="/client">For studios</a></li>
                         <li class="<?php if($page == 'candidates' ) { echo 'active';}?>"><a href="/candidates">For candidates</a></li>
                         <li class="<?php if($page == 'jobs' ) { echo 'active';}?>"><a href="/jobs">Live Jobs</a></li>
                         <li class="<?php if($page == 'our-gaming-hubs' ) { echo 'active';}?>"><a href="/our-gaming-hubs">Our Gaming Hubs</a></li>
                         <li class="<?php if($page == 'refer-a-friend' ) { echo 'active';}?>"><a href="/refer-a-friend">Referral Program</a></li>
                         <li class="<?php if($page == 'blog' ) { echo 'active';}?>"><a href="/blog">Blog</a></li>
                         <li class="<?php if($page == 'contact-us' ) { echo 'active';}?>"><a href="/contact-us">Contact us</a></li>

                    </ul>
                </nav>
            </div>
        </div>

        <header <?php if($article) {echo 'class="scrolled_article"';} ?>>
            <div class="content">

                <div class="grid grid--gutters">

                    <div class="grid-cell gs-threequarters">
                        <div class="logoBox">
                            <a href="/"><img src="/img/haptic_logo.png" alt="Haptic Logo"></a>
                        </div>
                    </div>

                    <div class="grid-cell gs-quarter">
                        <div class="menuBox <?php if($page == 'about-us') { echo 'menuAbout'; } ?>">
                            <img src="/img/icons/menu.svg" alt="Menu">
                        </div>
                    </div>

                </div>

            </div>
        </header>