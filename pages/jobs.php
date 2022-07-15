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

<section class="patternBg blogLanding job_container">

    <div class="content">

        <h2>Creative</h2>

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Creative' AND visible = 1 ORDER BY post_date DESC LIMIT 3");

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

        <br>
        <p style="text-align: center;"><a href="/jobs/creative" class="btn">View all Creative jobs</a></p>


    </div>

</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <h2>Technical</h2>

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Technical' AND visible = 1 ORDER BY post_date DESC LIMIT 3");
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

        <br>
        <p style="text-align: center;"><a href="/jobs/technical" class="btn">View all Technical jobs</a></p>


    </div>

</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <h2>Production</h2>

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Production' AND visible = 1 ORDER BY post_date DESC LIMIT 3");
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

        <br>
        <p style="text-align: center;"><a href="/jobs/production" class="btn">View all Production jobs</a></p>


    </div>

</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <h2>Commercial</h2>

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Commercial' AND visible = 1 ORDER BY post_date DESC LIMIT 3");

            $returnres = mysql_num_rows($resultBlogList);
            if($returnres=="0"){
                ?>
                <div class="grid-cell">
                    
                    <h3>Sorry there aren't any jobs in this category just yet, however please <a href="/contact-us/">get in touch</a> and we'll make it our mission to find you one!</h3>
                </div>
                <?php
            }else{

                
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
                <?php 
                } 
            }
                ?>

        </div>

        <?php 
        if($returnres=="0"){
        } else {


        ?>
        <br>
        <p style="text-align: center;"><a href="/jobs/commercial" class="btn">View all Commercial jobs</a></p>
        <?php 

        } 

        ?>
    </div>

</section>

<?php
    }elseif($article == 'creative') {

    ?>
        <section id="innerHero" class="hero">
    <div class="content">
        
        <div class="titleContainer">
            <div class="title">
                <h1>Creative</h1>
            </div>
        </div>

    </div>
</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Creative' AND visible = 1 ORDER BY post_date DESC");

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
        <br>
        <p style="text-align: center;"><a href="/jobs" class="btn">Back to all jobs</a></p>

    </div>

</section>

    <?php

    }elseif($article == 'technical') {

    ?>
        <section id="innerHero" class="hero">
    <div class="content">
        
        <div class="titleContainer">
            <div class="title">
                <h1>Technical</h1>
            </div>
        </div>

    </div>
</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Technical' AND visible = 1 ORDER BY post_date DESC");

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
        <br>
        <p style="text-align: center;"><a href="/jobs" class="btn">Back to all jobs</a></p>

    </div>

</section>

    <?php

    }elseif($article == 'production') {

    ?>
        <section id="innerHero" class="hero">
    <div class="content">
        
        <div class="titleContainer">
            <div class="title">
                <h1>Production</h1>
            </div>
        </div>

    </div>
</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Production' AND visible = 1 ORDER BY post_date DESC");

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
        <br>
        <p style="text-align: center;"><a href="/jobs" class="btn">Back to all jobs</a></p>

    </div>

</section>

    <?php

    }elseif($article == 'commercial') {

    ?>
        <section id="innerHero" class="hero">
    <div class="content">
        
        <div class="titleContainer">
            <div class="title">
                <h1>Commercial</h1>
            </div>
        </div>

    </div>
</section>

<section class="patternBg blogLanding job_container">

    <div class="content">

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM jobs WHERE type = 'Commercial' AND visible = 1 ORDER BY post_date DESC");

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
        <br>
        <p style="text-align: center;"><a href="/jobs" class="btn">Back to all jobs</a></p>

    </div>

</section>

    <?php

    } else {
    
        $resultBlogPost = mysql_query("SELECT * FROM jobs WHERE slug = '$article'");
            while($row = mysql_fetch_array($resultBlogPost))
            {
                $job_title = $row['title'];
                $email_job_title = str_replace(" ", "%20", $row['title']);
                $slug = $row['slug'];
                $post_date = $row['post_date'];
                $newDate = date("jS F Y", strtotime($post_date));
                $short_description = $row['short_description'];
                // $image = $row['image'];
                $post_content = $row['content'];
                $location = $row['location'];
                $start_date = $row['start_date'];
                $salary = $row['salary'];
                $salary = htmlentities($salary);
                $hours = $row['hours'];
                $contract = $row['contract'];
                $side_image_1 = $row['side_image_1'];
                $side_image_2 = $row['side_image_2'];
                $side_image_3 = $row['side_image_3'];
                $contact = $row['contact'];

                //Job Application Script
                
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $job_position = $_POST['job_position'];
    $job_url = $_POST['job_url'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($first_name)){
        
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            
            if($uploadStatus == 1){
                
                // Recipient
                $toEmail = $contact;
                //$toEmail = 'alex@arcdevelop.co.uk';

                // Sender
                $from = 'no-reply@hapticrecruit.com';
                $fromName = $first_name . ' '.$last_name;
                
                // Subject
                $emailSubject = 'New Job Application';
                
                // Message 
                $htmlContent = '<html><body><h2 style="font-size: 28px;background-color: #DDD;padding: 6px 10px;">New Job Application</h2>
                    <p style="font-size: 18px;">Great news, <strong>'.$first_name.' '.$last_name.'</strong> has applied for the position <strong><a style="color: #E75117;" href="https://www.hapticrecruit.com/jobs/'.$job_url.'/">'.$job_position.'</a></strong>.</p>

                    <p style="font-size: 18px;">Contact <strong>'.$first_name.'</strong> via email now: <strong><a style="color: #E75117;" href="mailto:'.$email.'">'.$email.'</a></strong>.</p>
                    <p style="font-size: 18px;">Check to see if their CV is attached, if not ask them to send one!</p><hr></html></body>';
                
                // Header for sender info
                $headers = "From: Haptic Website Application"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    //$returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    header('Location: /application-submitted/'.$job_url.'');
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}


            ?>

            <section id="innerHero" class="hero">
                <div class="content">
                    
                    <div class="titleContainer">
                        <div class="title">
                            <h1><?php echo $job_title; ?></h1>
                        </div>
                    </div>

                </div>
            </section>

            <section id="article_content" class="patternBg job_content">
                <div class="content">
                    
                    <article>
                        <p class="date">Posted on: <?php echo $newDate; ?> <!--| <a href="#">Print this job</a>--></p>
                        <!-- <h1 title="<?php echo $job_title; ?>"><?php echo $job_title; ?></h1> -->

                        <div class="sidebar mobile_side">
                            <h3>At a glance</h3>
                            <div>
                                <ul>
                                    <li><strong>Hours:</strong> <span><?php echo $hours; ?></span></li>
                                    <li><strong>Contract:</strong> <span><?php echo $contract; ?></span></li>
                                    <li><strong>Location:</strong> <span><?php echo $location; ?></span></li>
                                    <!-- <li><strong>Start Date:</strong> <span><?php echo $start_date; ?></span></li> -->
                                    <!-- <li><strong>Salary:</strong> <span><?php echo $salary; ?></span></li> -->
                                </ul>
                                <?php if($short_description) { ?><p><strong>Summary: </strong><br><?php echo $short_description; ?></p><?php } ?>
                                <p><a href="#scrollapply_form" class="btn">Apply Now</a></p>
                            </div>
                        </div>

                        

                        <?php echo $post_content; ?>
                        <hr id="scrollapply_form">
                        <p class="tools"><strong>Tools:</strong> <a href="https://pdf-ace.com/pdfme?print_media=1&cache=0&url=/jobs/<?php echo $slug; ?>" target= "_blank">Save as PDF</a>  <a href="#" onclick="window.print();return false;" >Print this job</a></p>
                        <hr>

                            <div class="sidebar glance_sidebar">
				                <h3 class="larger_title">Interested in this position?</h3>
				
                                <div>
                                    <form method="post" action="" enctype="multipart/form-data">
                                         <input type="hidden" name="job_position" value="<?php echo $job_title; ?>">
                                         <input type="hidden" name="job_url" value="<?php echo $slug; ?>">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" placeholder="First name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" placeholder="Last name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload your CV</label>
                                            <input type="file" name="attachment" class="form-control">
                                        </div>
                                        <div class="submit">
                                            <input type="submit" name="submit" class="btn" value="Apply Now">
                                        </div>
                                    </form>
                                    <?php if(!empty($statusMsg)){ ?>
                                        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                                    <?php } ?>    
                                </div>
                            </div>



                    </article>

                    <aside>

                        <p class="tools"><a href="https://pdf-ace.com/pdfme?print_media=1&cache=0&url=/jobs/<?php echo $slug; ?>" target= "_blank">Save as PDF</a> <a href="#" onclick="window.print();return false;" >Print this job</a></p>
                        <div class="sidebar glance_sidebar">
                            <h3>At a glance</h3>
                            <div>
                                <ul>
                                    <li><strong>Hours:</strong> <span><?php echo $hours; ?></span></li>
                                    <li><strong>Contract:</strong> <span><?php echo $contract; ?></span></li>
                                    <li><strong>Location:</strong> <span><?php echo $location; ?></span></li>
                                    <!-- <li><strong>Start Date:</strong> <span><?php echo $start_date; ?></span></li> -->
                                    <!-- <li><strong>Salary:</strong> <span><?php echo $salary; ?></span></li> -->
                                </ul>
                                <?php if($short_description) { ?><p><strong>Summary: </strong><br><?php echo $short_description; ?></p><?php } ?>
                                <p><a href="#scrollapply_form" class="btn">Apply Now</a></p>
                            </div>
                        </div>

                        <div class="sidebar" style="display:none;">
                            <h3>The Office</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310.2782129399503!2d-0.08862606542161268!3d51.52741997304115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d1618b8bad5%3A0x36ee1976367a95e3!2sWeWork!5e0!3m2!1sen!2suk!4v1557176777387!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <?php if($side_image_1) { ?>
                        <div class="sidebar">
                            <img src="<?php echo $side_image_1; ?>">
                        </div>
                        <?php }

                        if($side_image_2) { ?>
                        <div class="sidebar">
                            <img src="<?php echo $side_image_2; ?>">
                        </div>
                        <?php }

                        if($side_image_3) { ?>
                        <div class="sidebar">
                            <img src="<?php echo $side_image_3; ?>">
                        </div>
                        <?php } ?>
                    </aside>
<!-- 
                    <div id="share_article"></div> -->
                </div>
            </section>
            
            <!-- <div class="structuredData" style="display: none;">
                <div itemscope itemtype="https://schema.org/JobPosting">
                  <span itemprop="title"><?php echo $job_title; ?></span>
                  <span itemprop="datePosted"><?php echo $post_date; ?></span>
                  <span itemprop="description"><?php echo $post_content; ?></span>
                  <span itemprop="description"><?php echo $post_content; ?></span>
                  <span itemprop="hiringOrganization">Haptic Recruit</span>
                  <span itemprop="jobLocation"><?php echo $location; ?></span>
                  <span itemprop="estimatedSalary"><?php echo $salary; ?></span>
                  <span itemprop="employmentType"><?php echo $hours; ?> (<?php echo $contract; ?>)</span>
                  <span itemprop="industry">Gaming</span>
                </div>
            </div> -->
                
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
        
