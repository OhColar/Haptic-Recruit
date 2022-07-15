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
        <section id="innerHero" class="hero refer-hero" <?php //if($page == 'about-us') { echo "style='background-image: url(/img/team/banner.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;'"; } ?>>
            <div class="content">
                
                <div class="titleContainer">
                    
                    <div class="title">
                        <h1>Refer a friend<sup>*</sup>, win a £250 Amazon voucher</h1>
                    </div>
               
                </div>

            </div>
        </section>
        <?php 
        //Job Application Script
        $msgClass = 'errordiv';
        if(isset($_POST['submit'])){
            // Get the submitted form data
            $postData = $_POST;

            $referrer_name = $_POST['referrer_name'];
            $referrer_email = $_POST['referrer_email'];
            $their_name = $_POST['their_name'];
            $their_email = $_POST['their_email'];
            $role = $_POST['role'];

            $jobsData = mysql_query("SELECT * FROM jobs WHERE id = $role ORDER BY title DESC");

             while($row = mysql_fetch_array($jobsData)) {

                $jobDataTitle = $row['title'];   
                $jobDataSlug = $row['slug'];   
                $jobContact = $row['contact'];

             }
            
            // Check whether submitted data is not empty
            if(!empty($referrer_email) && !empty($referrer_name)){
                
                // Validate email
                if(filter_var($referrer_email, FILTER_VALIDATE_EMAIL) === false){
                    $statusMsg = 'Please enter a valid email.';
                }else{
                    $uploadStatus = 1;
                }
                    // Upload attachment file
                    
                    if($uploadStatus == 1){
                        
                        // Recipient
                        if($role == 'Other') {
                            $toEmail = 'james@hapticrecruit.com';
                        } else {
                            $toEmail = $jobContact;
                        }
                        //$toEmail = 'theo@hapticrecruit.com';

                        // Sender
                        $from = 'no-reply@hapticrecruit.com';
                        $fromName = $referrer_name;
                        
                        // Subject
                        $emailSubject = 'New Referral';
                        
                        // Message 
                        $htmlContent = '<html><body><h2 style="font-size: 28px;background-color: #DDD;padding: 6px 10px;">New Referral</h2>
                            <p style="font-size: 18px;">Great news, <strong>'.$referrer_name.' (<a style="color: #E75117;" href="mailto:'.$referrer_email.'">'.$referrer_email.'</a>)</strong> has referred their friend <strong>'.$their_name.'</strong> for this position:</p>
                            <p style="font-size: 18px;"><strong><a style="color: #E75117;" href="https://www.hapticrecruit.com/jobs/'.$jobDataSlug.'">'.$jobDataTitle.'</a></strong></p>

                            <p style="font-size: 18px;">Contact <strong>'.$their_name.'</strong> to arrange a chat:</p>
                            <p style="font-size: 18px;"><strong><a style="color: #E75117;" href="mailto:'.$their_email.'">'.$their_email.'</a></strong></p>
                            <hr></html></body>';

                        // Client Message
                        // Message 
                        $htmlContentClient = '<html><body>
                            <p>Hey '.$their_name.',</p>
                            <p>Great news! Your friend '.$referrer_name.' (<a style="color: #E75117;" href="mailto:'.$referrer_email.'">'.$referrer_email.'</a>) has referred you for the following position via the Haptic Recruit website.</p>
                            <p>Job Position: <a style="color: #E75117;" href="https://www.hapticrecruit.com/jobs/'.$jobDataSlug.'">'.$jobDataTitle.'</a></p>
                            <p>One of our specialist recruiters will be in touch via email to see if this is something you’re interested in and find a good time to chat about the role, your experience, and what you might be interested in.</p>
                            <p>In the meantime, let us share a little more about who we are and what we do.</p>
                            <p>We started our journey in late 2018 as a team of 2 with the belief that in an ever-changing world, connections, opportunities, and growth should be made easy.</p>
                            <p>3 years later, we’re a team of 7 shaking up video game recruitment as you know it.</p>
                            <p>We believe that people-first recruitment can be a driver for change and is fundamental to happy, successful candidates. We achieve this by empowering studios to build talented, diverse teams made up of the best the industry has to offer.</p>
                            <p>By bridging the gap between candidates and studios, we can offer the best opportunities to those passionate about making a difference.</p>
                            <p>We are exceptionally proud to have worked with hundreds of incredible studios and candidates, building diverse and talented teams to create the next generation of games.</p>
                            <p>Speak soon,</p>
                            <p>The Haptic Recruit team</p>
                            <p>P.S. You can learn more about us, meet the team and view all our open roles at <a style="color: #E75117;" href="https://www.hapticrecruit.com/">www.hapticrecruit.com</a></p>
                            <hr></html></body>';

                        // Different message for Other

                            if($role == 'Other') {
                                // Message 
                                $htmlContent = '<html><body><h2 style="font-size: 28px;background-color: #DDD;padding: 6px 10px;">New Referral</h2>
                                    <p style="font-size: 18px;">Great news, <strong>'.$referrer_name.' (<a style="color: #E75117;" href="mailto:'.$referrer_email.'">'.$referrer_email.'</a>)</strong> has referred their friend <strong>'.$their_name.'</strong> for a non specific position.</p>

                                    <p style="font-size: 18px;">Contact <strong>'.$their_name.'</strong> to arrange a chat and find out more about what they are looking for:</p>
                                    <p style="font-size: 18px;"><strong><a style="color: #E75117;" href="mailto:'.$their_email.'">'.$their_email.'</a></strong></p>
                                    <hr></html></body>';

                                // Client Message
                                // Message 
                                $htmlContentClient = '<html><body>
                                    <p>Hey '.$their_name.',</p>
                                    <p>Great news! Your friend '.$referrer_name.' (<a style="color: #E75117;" href="mailto:'.$referrer_email.'">'.$referrer_email.'</a>) has referred you Haptic Recruit to find you a new role.</p>
                                    <p>One of our specialist recruiters will be in touch via email to see if this is something you’re interested in and find a good time to chat about the role, your experience, and what you might be interested in.</p>
                                    <p>In the meantime, let us share a little more about who we are and what we do.</p>
                                    <p>We started our journey in late 2018 as a team of 2 with the belief that in an ever-changing world, connections, opportunities, and growth should be made easy.</p>
                                    <p>3 years later, we’re a team of 7 shaking up video game recruitment as you know it.</p>
                                    <p>We believe that people-first recruitment can be a driver for change and is fundamental to happy, successful candidates. We achieve this by empowering studios to build talented, diverse teams made up of the best the industry has to offer.</p>
                                    <p>By bridging the gap between candidates and studios, we can offer the best opportunities to those passionate about making a difference.</p>
                                    <p>We are exceptionally proud to have worked with hundreds of incredible studios and candidates, building diverse and talented teams to create the next generation of games.</p>
                                    <p>Speak soon,</p>
                                    <p>The Haptic Recruit team</p>
                                    <p>P.S. You can learn more about us, meet the team and view all our open roles at <a style="color: #E75117;" href="https://www.hapticrecruit.com/">www.hapticrecruit.com</a></p>
                                    <hr></html></body>';

                            }


                        // Header for sender info
                        $headers = "From: Haptic Website Referral"." <".$from.">";

                        
                         // Set content-type header for sending HTML email
                        $headers .= "\r\n". "MIME-Version: 1.0";
                        $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                        
                        // Send email
                        $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 

                        //Send email to client
                        $mail = mail($their_email, $emailSubject, $htmlContentClient, $headers); 
                        
                        
                        // If mail sent
                        if($mail){
                            $statusMsg = 'Your contact request has been submitted successfully !';
                            $msgClass = 'succdiv';
                            header('Location: /referral-submitted/'.$jobDataSlug.'');
                            
                            $postData = '';
                        }else{
                            $statusMsg = 'Your contact request submission failed, please try again.';
                        }
                    }
                }
            }else{
                $statusMsg = 'Please fill all the fields.';
            }
        ?>
        <section class="banner patternBg aboutDetails">

            <div class="content">

                <?php echo $content; ?>

                <!-- Refer Form -->
                <div class='refer-form-container'>
                    <form method="post" action="" >
                         <!-- <input type="hidden" name="job_position" value="<?php echo $job_title; ?>">
                         <input type="hidden" name="job_url" value="<?php echo $slug; ?>"> -->
                         <h3>Your Details</h3>
                         <hr>
                        <div class="form-group">
                            <input type="text" name="referrer_name" class="form-control" value="<?php echo !empty($postData['referrer_name'])?$postData['referrer_name']:''; ?>" placeholder="Your name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="referrer_email" class="form-control" value="<?php echo !empty($postData['referrer_email'])?$postData['referrer_email']:''; ?>" placeholder="Your email address" required="">
                        </div>
                        <br>
                        <h3>Details of who you're referring</h3>
                        <hr>
                        <div class="form-group">
                            <input type="text" name="their_name" class="form-control" value="<?php echo !empty($postData['their_name'])?$postData['their_name']:''; ?>" placeholder="Their full name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="their_email" class="form-control" value="<?php echo !empty($postData['their_email'])?$postData['their_email']:''; ?>" placeholder="Their email address" required="">
                        </div>
                        <br>
                        <h3>The role you want to refer them to</h3>
                        <hr>
                        <div class="form-group">
                            <select name='role' required>
                                <option value="" disabled="" selected="">Please select a role</option>
                                <option value='Other'>Other - (not listed)</option>
                                <?php 
                                    $jobsList = mysql_query("SELECT * FROM jobs WHERE visible = 1 ORDER BY title ASC");

                                     while($row = mysql_fetch_array($jobsList))
                                        {
                                            $job_id = $row['id'];
                                            $job_title = $row['title'];       
                                            $job_location = $row['location'];       
                                ?>

                                            <option value='<?php echo $job_id; ?>'><?php echo $job_title; if($job_location) { ?> - (<?php echo $job_location; ?>) <?php } ?></option>
                                <?php
                                        }
                                ?>
                                
                            </select>
                        </div>
                        <div class="submit">
                            <input type="submit" name="submit" class="btn" value="REFER NOW">
                        </div>
                    </form>
                    <?php if(!empty($statusMsg)){ ?>
                        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                    <?php } ?>    
                </div>
                </div>

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

        