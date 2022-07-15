 <?php


    if(isset($_POST['submit'])) {
    
    $add_post = $_POST['add_post'];
    $seo_name = doSeo($add_post);
    $today = date("Y-m-d");
                                                                                                                                       
                            
    $result = mysql_query("INSERT INTO jobs (slug, title, internal_title, post_date, content, short_description, image, side_image_1, side_image_2, side_image_3, featured, location, location_hub, start_date, salary, type, visible, contact) VALUES ('$seo_name-$today','$add_post','$add_post','$today','','','','','','','0','','','','','','0','info@hapticrecruit.com')");


    echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Awesome! Job has been created... time to <a href=\"/admin?app=manage_job\">add details</a>.</p></div>";                

    }

?>

<h1>Add a Job</h1>
<p>Using the form below enter the job title. By default the job will be <strong>hidden</strong> until you add content and make it visible.</p>



    <form method="post" action="?app=add_job">
        
        <div class="formRow">
            <label>Job Title</label>
            <input type="text" name="add_post" class="textbox" />
        </div>
        <div class="formRow">
            <button type="submit" name="submit" value="Create Post" class="btn" >Submit</button>
        </div>

    </form>

<br>