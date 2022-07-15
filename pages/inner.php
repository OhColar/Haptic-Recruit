<?php 

    if(($page_title == '') && ($content == '')) {

        ?>

        <section id="innerHero" class="hero">
            <div class="content">
                
                <div class="titleContainer" style="max-height: 330px;">
                    <div class="title">
                        <h1>Page not found</h1>
                    </div>
                </div>

            </div>
        </section>

        <section class="banner patternBg aboutDetails">

            <div class="content">

                <h3>Sorry it seems like the page you're looking for doesn't exist.</h3>
                <p>Feel free to navigate to our other pages or <strong><a href="/contact-us">contact us</a></strong> if you have a question.</p>

            </div>

        </section>

        <?php


    } else {

?>
        <section id="innerHero" class="hero" <?php //if($page == 'about-us') { echo "style='background-image: url(/img/team/banner.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;'"; } ?>>
            <div class="content">
                
                <div class="titleContainer">
                    
                    <div class="title">
                        <h1><?php echo $page_title; ?></h1>
                    </div>
               
                </div>

            </div>
        </section>

        <section class="banner patternBg aboutDetails">

            <div class="content">

                <?php echo $content; ?>

            </div>

        </section>

        <?php
    }

        // Show team bar
        if($page == 'about-us') {
            
            include "pages/app/team.php";

            ?>
        <!-- <section class="about_extra">
            <div class="content">
               
                <img src="/img/global_network_VR.jpg" alt="Our Global Gaming Network">
                <h3>What we do &amp; how we do it</h3>
                    <div class="about_extra_text">

                        <p>Studios know that the best teams develop the best games. However, they also know that given the candidate short market, steep competition and a lack of personal resources and time; building that perfect team is challenging.</p>
                        <p>Through our specialised network and data-driven yet personal approach we aim to work with you to become your long-term recruitment partner. We have a successful history* of working with both start-ups where we build teams from the ground up and the industry giants; offering both permanent and contract solutions.</p>
                        <p>We are regularly described as having the network and headhunting skills reflective of an external agency but the personal relationship and culture understanding of your in-house recruiter.</p>
                        <p>We spend almost a third of our lives at work. And luckily for you, given the industry you’re in, it is most likely that you love what you do. Haptic is at the forefront of expertly tailored career development. Not only can we help with mapping out your future career, but we can use our network to source the best opportunities for you. You want to work on ‘that’ project? Tell us about it, and we’ll open the right doors.</p>
                        <p>We work across the key Gaming hubs. This means we can offer you a first-hand insight into anything from industry veterans starting new studios, to the giants setting up new departments or expanding global for new projects. We are also able to act as a bridge to a potential relocation.</p>
                        <p>We work with personally selected studios who we believe are the best. We don’t just find our candidates a job to get their foot in the door, we help them to roadmap their career then offer the necessary connections and resources at each step for this to become a reality.</p>
                        <p>For those of you who might consider relocation; we understand it is a huge, life changing decision, and finding the perfect role and remuneration is only one box ticked. Whether you are considering relocation in six months or in five years, we will work with you to offer a bespoke relocation package including information in local property, travel, family relocation and policy.</p>
                        <p>Take some time to explore our Global Gaming hubs; if you like what you see get in touch and join our network! <br>
                        <strong>Pressing play on our Global gaming mission starts and ends with you.</strong></p>

                            
                    </div>
                    <p><a href="/our-gaming-hubs" class="btn">Our gaming hubs</a></p>
                    
            </div>
        </section> -->
            <?php


        }

        // Show hubs
        // if($page == 'our-gaming-hubs') {

        //     include "pages/app/hubs.php";

        // }

        ?>

        <!-- Jobs Carousel -->
        <!-- 90.254.49.79 -->
        <?php 
           // if(($_SERVER["REMOTE_ADDR"]=='90.252.10.200') || ($_SERVER["REMOTE_ADDR"]=='79.173.128.106') || ($_SERVER["REMOTE_ADDR"]=='5.69.3.6') || ($_SERVER["REMOTE_ADDR"]=='109.159.170.100')){
        ?>
                <section class="banner jobsBanner" style="display: none;">
                    <div class="content">
                        <h2>Haptic's Hottest Jobs</h2>

                        <ul id="jobs_slider">

                            <?php

                            $resultHPJobs = mysql_query("SELECT * FROM jobs WHERE visible = 1 ORDER BY id ASC");
                            while($row = mysql_fetch_array($resultHPJobs))
                            {
                                $job_title = $row['title'];
                                $job_slug = $row['slug'];
                                $job_location = $row['location'];
                                $job_start = $row['start_date'];
                                $job_salary = $row['salary'];
                                $job_description = $row['short_description'];

                            ?>

                            <li>
                                <div class="jobCard patternBg">
                                    <h3><a href="/jobs/<?php echo $job_slug; ?>"><?php echo $job_title; ?></a></h3>
                                    <p><?php echo $job_description; ?></p>
                                    <ul>
                                        <li><strong>Location:</strong> <span><?php echo $job_location; ?></span></li>
                                        <li><strong>Start Date:</strong> <span><?php echo $job_start; ?></span></li>
                                        <li><strong>Salary:</strong> <span><?php echo $job_salary; ?></span></li>
                                    </ul>

                                    <p><a href="/jobs/<?php echo $job_slug; ?>" class="btn">Find out more</a></p>
                                </div>
                            </li>

                            <?php } ?>
                            
                        </ul>

                    </div>
                </section>
        <?php
            // }
        ?>

        <!-- Jobs Carousel -->

        