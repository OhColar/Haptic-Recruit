<?php 
    
    if(!$article) {

?>

<section id="innerHero" class="hero">
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

<section class="patternBg hubs">

    <div class="content">

        <ul id="hub_list" class="hubs_landing">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM hubs WHERE visible = 1 ORDER BY post_date DESC");
            while($row = mysql_fetch_array($resultBlogList))
            {
                $hub_name = $row['title'];
                $slug = $row['slug'];
                $post_date = $row['post_date'];
                $newDate = date("jS F Y", strtotime($post_date));
                $meta_description = $row['meta_description'];
                $image = $row['image'];

            ?>
            <li>
                <a class="anchor" id="hubBarcelona"></a>
                <div class="hub_image">
                    <img src="<?php echo $image; ?>" alt="<?php echo $hub_name; ?> Hub">
                </div>
                <div class="hub_text">
                    <h3><?php echo $hub_name; ?></h3>
                    <p><?php echo $meta_description; ?></p>
                    <p><a href="/our-gaming-hubs/<?php echo $slug; ?>" class="btn">Read more</a></p>
                </div>
                
            </li>

            <?php } ?>

            
        </ul>

    </div>

    

</section>

       <!-- Let's go for coffee -->

        <?php
            // if(isset($_POST['submit'])) {

            //     //$to = "alex@arcdevelop.co.uk";
            //     $to = "hannah@hapticrecruit.com";
            //     $subject = "Coffee Enquiry";
            //     $headers  = "From: Haptic Website <info@hapticrecruit.com> \r\n";
            //     $headers .= "Reply-To: ". $_POST['email'] . "\r\n";
            //     $headers .= "MIME-Version: 1.0\r\n";
            //     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            //     $message = "The following person wants a coffee with you:<br><br>";
            //     $message .= "<strong>Full Name: </strong>" . $_POST['full_name'];
            //     $message .= "<br><strong>Email Address: </strong>" . $_POST['email'];
                

               
            //       echo '<p class="form-response form-success">Thank you, your message was successfully sent, we will be in touch shortly.</p>';

            //       mail($to, $subject, $message, $headers);

                

            // }
        ?>

        <div id="coffee_popup">

            <div id="coffee_header">
                <h4>
                    <img class="shake" src="/img/icons/question-mark.svg" alt="Alert">
                    Latest Job Alerts
                </h4>
            </div> 

            <div id="coffee_body">
                <p>Subscribe to our newsletter to get all our latest job opportunities, blog posts and more.</p>

                <div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="https://hapticrecruit.us19.list-manage.com/subscribe/post?u=a4975e034272949d5062e88da&amp;id=2640a6aff0" method="post"><input name="__csrf_magic" type="hidden" value="sid:42b99b24c04a15a092255f356f5dfc2ef1518c2e,1627386203" /><input name="__csrf_magic" type="hidden" value="sid:f752c641b8d657de2a66e15ed9811947acff3eeb,1626859692" /><input name="__csrf_magic" type="hidden" value="sid:030b05d5253bfd5a0aa2202ea5018177c7dc0b3f,1626859562" /><input name="__csrf_magic" type="hidden" value="sid:4efcc8c50ad5f940cf10e66adb8a7ac5b1138483,1626858294" /><input name="__csrf_magic" type="hidden" value="sid:75939326c5be099ebe0470b1f374491c445ef52f,1626692015" /><input name="__csrf_magic" type="hidden" value="sid:10a799bd2e5c94f5e5e7009603b6be15e496f087,1626691623" /><input name="__csrf_magic" type="hidden" value="sid:0d02a1cc05aa83d169a24479dbc6102739e40fbb,1626689027" /><input name="__csrf_magic" type="hidden" value="sid:b67f9bcc02577742ded0ea2e17f17f8cd392ae7d,1626688993" /><input name="__csrf_magic" type="hidden" value="sid:3e8eec027696b2d93024c5c53d05b7165c70c591,1626688959" /><input name="__csrf_magic" type="hidden" value="sid:4f8676b189f07fa4e7d1371755b41d285e660645,1622036979" /><input name="__csrf_magic" type="hidden" value="sid:f8cb5594bad4c75c7f1b4eb45819280461411f36,1622036126" /><input name="__csrf_magic" type="hidden" value="sid:8d32b4e81755fb82fa3d4d6b1dc78f9b9ac00b9a,1622036090" /><input name="__csrf_magic" type="hidden" value="sid:d200fceebbe8ec37168b4c692f48684a23ceb470,1622035850" /><input name="__csrf_magic" type="hidden" value="sid:e0b7d6b2ad60016b3ee71b8bc137d4f92654ed8d,1622035793" /><input name="__csrf_magic" type="hidden" value="sid:9c5d9754cbd326406045b37deb15024bd03941c2,1622035717" /><input name="__csrf_magic" type="hidden" value="sid:796337575329702bc0fe676692fd0db963162073,1622035658" /><input name="__csrf_magic" type="hidden" value="sid:84a0b5cfce80d2de9c0174fedf700b3ba2ce7daf,1622035549" /><input name="__csrf_magic" type="hidden" value="sid:aca08ae778846c07425fee39fdcce2193933b77f,1621352765" /><input name="__csrf_magic" type="hidden" value="sid:1232f61cb1e397665c10bdaad53973edb0816b94,1620919505" /><input name="__csrf_magic" type="hidden" value="sid:a63bf94f81653db1c5a82a75f85f6d354dd73aad,1620916979" /><input name="__csrf_magic" type="hidden" value="sid:39028c32eec05d2721b7be0a5bfe250966d0a5e0,1620916629" /><input name="__csrf_magic" type="hidden" value="sid:069fa19f164dbd2c66ce3f59570b4c491c59943e,1620916561" /><input name="__csrf_magic" type="hidden" value="sid:2d9c39b4061d198afeefe5bdba38ee287ed9346a,1620913337" /><input name="__csrf_magic" type="hidden" value="sid:9d945dc809047ec22b9d4cfc31e51dbbb7f95682,1620913188" /><input name="__csrf_magic" type="hidden" value="sid:6b25894aeef524d110995c2d69be88e8b36639f0,1620913100" /><input name="__csrf_magic" type="hidden" value="sid:7491e91d047556304adbd86f181f8eb8e880297b,1620912792" /><input name="__csrf_magic" type="hidden" value="sid:2d37fd655ac004718bd8591dca71852c151ae444,1620222620" /><input name="__csrf_magic" type="hidden" value="sid:4b1116ca85b540c80cfe4bab8014a7340bc751d4,1620222578" /><input name="__csrf_magic" type="hidden" value="sid:2c011c9201e53bfb1887a6a53a71293967227456,1620222543" /><input name="__csrf_magic" type="hidden" value="sid:91432f803ce11759992f459fc9bc23f1c86cb688,1620222518" /><input name="__csrf_magic" type="hidden" value="sid:c12adda5bb7156f4c8d5f7ddfb7fef0258d5a91c,1620222493" /><input name="__csrf_magic" type="hidden" value="sid:8669214b98e26048c0ea2168f77e9016ab4ac2f4,1619710998" />
                            <div id="mc_embed_signup_scroll">
                            
                            <div class="mc-field-group"><input id="mce-FNAME" class="required" name="FNAME" type="text" value="" placeholder="First Name"/></div>
                            <div class="mc-field-group"><input id="mce-LNAME" class="required" name="LNAME" type="text" value="" placeholder="Last Name"/></div>
                            <div class="mc-field-group"><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address" /></div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input name="b_a4975e034272949d5062e88da_2640a6aff0" type="text" value="" /></div>
                            <div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Join Now" /></div>
                            </div>
                            </form></div>
                            <!--End mc_embed_signup-->
            </div>

        </div>


    <!-- Let's go for coffee -->


<?php
    } else {
    
        $resultBlogPost = mysql_query("SELECT * FROM hubs WHERE slug = '$article'");
            while($row = mysql_fetch_array($resultBlogPost))
            {
                $hub_name = $row['title'];
                $slug = $row['slug'];
                $post_date = $row['post_date'];
                $newDate = date("jS F Y", strtotime($post_date));
                $meta_description = $row['meta_description'];
                $image = $row['image'];
                $post_content = $row['content'];

            ?>
            <section id="innerHero" class="hero article_inner_hero">
            <?php 
            if($image) {
            ?>
                    <img src="<?php echo $image; ?>" alt="<?php echo $hub_name; ?>">
            <?php
            }
            ?>
            </section>

            <section id="article_content" class="patternBg hubs_inner">
                <div class="content">
                    <article>
                        <h1 title="<?php echo $hub_name; ?>"><?php echo $hub_name; ?></h1>
                        <?php echo $post_content; ?>
                        <hr>
                        <p><a href="/our-gaming-hubs">Back to all hubs</a></p>
                        </hr>

                    </article>
                    <div id="share_article"></div>
                </div>
            </section>

            <?php
                $resultBlogList = mysql_query("SELECT * FROM jobs WHERE location_hub = '$hub_name' AND visible = 1 ORDER BY post_date DESC");
                $returnres = mysql_num_rows($resultBlogList);
            if($returnres=="0"){} else {
                  
            ?>
            <section class="patternBg blogLanding job_container">

                <div class="content">

                    <h2>Available Jobs in <?php echo $hub_name; ?></h2>

                    <div class="grid grid--gutters">

                        <?php 

                        while($row = mysql_fetch_array($resultBlogList))
                        {
                            $job_title = $row['title'];
                            $slug = $row['slug'];
                            $post_date = $row['post_date'];
                            $newDate = date("jS F Y", strtotime($post_date));
                            $short_description = $row['short_description'];
                            $location_hub = $row['location_hub'];

                        ?>
                            <div class="grid-cell gs-third">
                                <article class="job_box">
                                    <div>
                                        <p class="location_flag"><img src="/img/flags/<?php echo $location_hub; ?>.svg" /> <?php echo $location_hub; ?></p>
                                        <h2><a href="/jobs/<?php echo $slug; ?>"><?php echo $job_title; ?></a></h2>
                                        <p><?php echo $short_description; ?></p>
                                        <p><a class="btn" href="/jobs/<?php echo $slug; ?>">View job</a></p>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>

                    </div>


                </div>

            </section>
            
            <!-- Let's go for coffee -->

        <?php
            }
            // ^^ closes the jobs

            // if(isset($_POST['submit'])) {

            //     //$to = "alex@arcdevelop.co.uk";
            //     $to = "hannah@hapticrecruit.com";
            //     $subject = "Coffee Enquiry";
            //     $headers  = "From: Haptic Website <info@hapticrecruit.com> \r\n";
            //     $headers .= "Reply-To: ". $_POST['email'] . "\r\n";
            //     $headers .= "MIME-Version: 1.0\r\n";
            //     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            //     $message = "The following person wants a coffee with you:<br><br>";
            //     $message .= "<strong>Hub Location: </strong>" .  $hub_name;
            //     $message .= "<br><strong>Full Name: </strong>" . $_POST['full_name'];
            //     $message .= "<br><strong>Email Address: </strong>" . $_POST['email'];
                

               
            //       echo '<p class="form-response form-success">Thank you, your message was successfully sent, we will be in touch shortly.</p>';

            //       mail($to, $subject, $message, $headers);

                

            // }
        ?>

        <div id="coffee_popup">

            <div id="coffee_header">
                <h4>
                    <img class="shake" src="/img/icons/question-mark.svg" alt="Alert">
                    Latest Job Alerts
                </h4>
            </div> 

            <div id="coffee_body">
                <p>Subscribe to our newsletter to get all our latest job opportunities, blog posts and more.</p>

                <div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="https://hapticrecruit.us19.list-manage.com/subscribe/post?u=a4975e034272949d5062e88da&amp;id=2640a6aff0" method="post"><input name="__csrf_magic" type="hidden" value="sid:42b99b24c04a15a092255f356f5dfc2ef1518c2e,1627386203" /><input name="__csrf_magic" type="hidden" value="sid:f752c641b8d657de2a66e15ed9811947acff3eeb,1626859692" /><input name="__csrf_magic" type="hidden" value="sid:030b05d5253bfd5a0aa2202ea5018177c7dc0b3f,1626859562" /><input name="__csrf_magic" type="hidden" value="sid:4efcc8c50ad5f940cf10e66adb8a7ac5b1138483,1626858294" /><input name="__csrf_magic" type="hidden" value="sid:75939326c5be099ebe0470b1f374491c445ef52f,1626692015" /><input name="__csrf_magic" type="hidden" value="sid:10a799bd2e5c94f5e5e7009603b6be15e496f087,1626691623" /><input name="__csrf_magic" type="hidden" value="sid:0d02a1cc05aa83d169a24479dbc6102739e40fbb,1626689027" /><input name="__csrf_magic" type="hidden" value="sid:b67f9bcc02577742ded0ea2e17f17f8cd392ae7d,1626688993" /><input name="__csrf_magic" type="hidden" value="sid:3e8eec027696b2d93024c5c53d05b7165c70c591,1626688959" /><input name="__csrf_magic" type="hidden" value="sid:4f8676b189f07fa4e7d1371755b41d285e660645,1622036979" /><input name="__csrf_magic" type="hidden" value="sid:f8cb5594bad4c75c7f1b4eb45819280461411f36,1622036126" /><input name="__csrf_magic" type="hidden" value="sid:8d32b4e81755fb82fa3d4d6b1dc78f9b9ac00b9a,1622036090" /><input name="__csrf_magic" type="hidden" value="sid:d200fceebbe8ec37168b4c692f48684a23ceb470,1622035850" /><input name="__csrf_magic" type="hidden" value="sid:e0b7d6b2ad60016b3ee71b8bc137d4f92654ed8d,1622035793" /><input name="__csrf_magic" type="hidden" value="sid:9c5d9754cbd326406045b37deb15024bd03941c2,1622035717" /><input name="__csrf_magic" type="hidden" value="sid:796337575329702bc0fe676692fd0db963162073,1622035658" /><input name="__csrf_magic" type="hidden" value="sid:84a0b5cfce80d2de9c0174fedf700b3ba2ce7daf,1622035549" /><input name="__csrf_magic" type="hidden" value="sid:aca08ae778846c07425fee39fdcce2193933b77f,1621352765" /><input name="__csrf_magic" type="hidden" value="sid:1232f61cb1e397665c10bdaad53973edb0816b94,1620919505" /><input name="__csrf_magic" type="hidden" value="sid:a63bf94f81653db1c5a82a75f85f6d354dd73aad,1620916979" /><input name="__csrf_magic" type="hidden" value="sid:39028c32eec05d2721b7be0a5bfe250966d0a5e0,1620916629" /><input name="__csrf_magic" type="hidden" value="sid:069fa19f164dbd2c66ce3f59570b4c491c59943e,1620916561" /><input name="__csrf_magic" type="hidden" value="sid:2d9c39b4061d198afeefe5bdba38ee287ed9346a,1620913337" /><input name="__csrf_magic" type="hidden" value="sid:9d945dc809047ec22b9d4cfc31e51dbbb7f95682,1620913188" /><input name="__csrf_magic" type="hidden" value="sid:6b25894aeef524d110995c2d69be88e8b36639f0,1620913100" /><input name="__csrf_magic" type="hidden" value="sid:7491e91d047556304adbd86f181f8eb8e880297b,1620912792" /><input name="__csrf_magic" type="hidden" value="sid:2d37fd655ac004718bd8591dca71852c151ae444,1620222620" /><input name="__csrf_magic" type="hidden" value="sid:4b1116ca85b540c80cfe4bab8014a7340bc751d4,1620222578" /><input name="__csrf_magic" type="hidden" value="sid:2c011c9201e53bfb1887a6a53a71293967227456,1620222543" /><input name="__csrf_magic" type="hidden" value="sid:91432f803ce11759992f459fc9bc23f1c86cb688,1620222518" /><input name="__csrf_magic" type="hidden" value="sid:c12adda5bb7156f4c8d5f7ddfb7fef0258d5a91c,1620222493" /><input name="__csrf_magic" type="hidden" value="sid:8669214b98e26048c0ea2168f77e9016ab4ac2f4,1619710998" />
                            <div id="mc_embed_signup_scroll">
                            
                            <div class="mc-field-group"><input id="mce-FNAME" class="required" name="FNAME" type="text" value="" placeholder="First Name"/></div>
                            <div class="mc-field-group"><input id="mce-LNAME" class="required" name="LNAME" type="text" value="" placeholder="Last Name"/></div>
                            <div class="mc-field-group"><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address" /></div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input name="b_a4975e034272949d5062e88da_2640a6aff0" type="text" value="" /></div>
                            <div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Join Now" /></div>
                            </div>
                            </form></div>
                            <!--End mc_embed_signup-->
            </div>

        </div>


    <!-- Let's go for coffee -->

                
            <?php } ?>

    

    <section class="blogLanding" style="background-color: #E75118; display: none;">

        <div class="content">
            <h2>Continue reading...</h2>
            <div class="grid grid--gutters">
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Technology</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Business</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Gaming</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php
    }
?>
        