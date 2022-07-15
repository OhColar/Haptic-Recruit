<?php
    
    $post = $_GET["post"];
    
    if(isset($_POST['submit'])) {   
    
    $title_new = $_POST["title_new"];
    $internal_title_new = $_POST["internal_title_new"];
    $slug_title_new = $_POST["slug_title_new"];;
    $post_date_new = $_POST["post_date_new"];
    $content_new = $_POST["content_new"];
    $short_description_new = $_POST["short_description_new"];
    // $image_new = $_POST["image_new"];
    $location_new = $_POST["location_new"];
    $location_hub_new = $_POST["location_hub_new"];
    $start_date_new = $_POST["start_date_new"];
    $salary_new = $_POST["salary_new"];
    $hours_new = $_POST["hours_new"];
    $contract_new = $_POST["contract_new"];
    $side_image_1_new = $_POST["side_image_1_new"];
    $side_image_2_new = $_POST["side_image_2_new"];
    $side_image_3_new = $_POST["side_image_3_new"];
    $type_new = $_POST["type_new"];
    $contact_new = $_POST["contact_new"];
    $salary_new = htmlentities($salary_new);
    
    $result = mysql_query("UPDATE jobs SET slug = '$slug_title_new', title = '$title_new', internal_title = '$internal_title_new', post_date = '$post_date_new', content = '$content_new', short_description = '$short_description_new', location = '$location_new', location_hub = '$location_hub_new', start_date = '$start_date_new', salary = '$salary_new', hours = '$hours_new', contract = '$contract_new', side_image_1 = '$side_image_1_new', side_image_2 = '$side_image_2_new', side_image_3 = '$side_image_3_new', type = '$type_new', contact = '$contact_new' WHERE id='$post'") or die(mysql_error());

    echo "<div class=\"success\"><p><img src=\"images/yes.svg\"> Wahoo! Job successfully updated.</p></div>";

    }

    // get current post data
    
    $result = mysql_query("SELECT * FROM jobs WHERE id = $post");
    $returnres = mysql_num_rows($result);
    if($returnres=="0"){
    }else{
    while($row = mysql_fetch_array($result))
    {
    $id = $row["id"];   
    $title = $row["title"];
    $internal_title = $row["internal_title"];
    $slug = $row["slug"];
    $post_date = $row["post_date"];
    $content = $row["content"];
    $short_description = $row["short_description"];
    $location = $row["location"];
    $location_hub = $row["location_hub"];
    $start_date = $row["start_date"];
    $salary = $row["salary"];
    $hours = $row["hours"];
    $contract = $row["contract"];
    $side_image_1 = $row["side_image_1"];
    $side_image_2 = $row["side_image_2"];
    $side_image_3 = $row["side_image_3"];
    $type = $row["type"];
    $contact = $row["contact"];

    }
    }

?>

<h1>Edit Job: <?php echo $title; ?></h1>

    <form method="post" action="?app=edit_job&post=<?php echo $post; ?>">
        <div class="formRow">
            <label>Job Title</label>
            <input type="text" name="title_new" value="<?php echo $title; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Internal Job Title</label>
            <input type="text" name="internal_title_new" value="<?php echo $internal_title; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Job Contact Address</label>
            <input type="text" name="contact_new" value="<?php echo $contact; ?>" class="textbox" />
        </div>

        <div class="formRow">
            <label>Job URL</label>
            <input type="text" name="slug_title_new" value="<?php echo $slug; ?>" class="textbox" />
        </div>

        <div class="formRow">
            <label>Job Type</label>
            
            <select name="type_new">


                <option value="" disable selected>Please select one</option>
                <option value="Creative" <?php if($type == 'Creative') { echo "selected";}?>>Creative</option>
                <option value="Production" <?php if($type == 'Production') { echo "selected";}?>>Production</option>
                <option value="Technical" <?php if($type == 'Technical') { echo "selected";}?>>Technical</option>
                <option value="Commercial" <?php if($type == 'Commercial') { echo "selected";}?>>Commercial</option>
            </select>

        </div>

        

        <div class="formRow">
            <label>Post Date</label>
            <input type="date" name="post_date_new" value="<?php echo $post_date; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Short Description</label>
            <input type="text" name="short_description_new" value="<?php echo $short_description; ?>" class="textbox" />
        </div>
        <!-- new -->
        <div class="formRow">
            <label>Location Hub</label>
            <input type="text" name="location_hub_new" value="<?php echo $location_hub; ?>" class="textbox" />
        </div>
        
        <!-- old -->
        <div class="formRow">
            <label>City</label>
            <input type="text" name="location_new" value="<?php echo $location; ?>" class="textbox" />
        </div>

        
        <div class="formRow">
            <label>Start Date</label>
            <input type="text" name="start_date_new" value="<?php echo $start_date; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Salary</label>
            <input type="text" name="salary_new" value="<?php echo $salary; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Hours</label>

            <select name="hours_new" class="textbox">
                <option value="Full-Time" <?php if($hours == 'Full-Time') { echo 'selected'; }?>>Full-Time</option>
                <option value="Part-Time" <?php if($hours == 'Part-Time') { echo 'selected'; }?>>Part-Time</option>
            </select>
        </div>
        <div class="formRow">
            <label>Contract</label>

            <select name="contract_new" class="textbox">
                <option value="Permanent" <?php if($contract == 'Permanent') { echo 'selected'; }?>>Permanent</option>
                <option value="Temporary" <?php if($contract == 'Temporary') { echo 'selected'; }?>>Temporary</option>
                <option value="Contract" <?php if($contract == 'Contract') { echo 'selected'; }?>>Contract</option>
            </select>

        </div>
        <div class="formRow">
            <label>Side Image 1</label>
            <!-- <input type="text" name="image_new" value="<?php echo $image; ?>" class="textbox" /> -->
            <input style="width:500px; display: inline-block;" type="text" name="side_image_1_new" id="txtSelectedFile" value="<?php echo $side_image_1; ?>" /> <span onclick="openCustomRoxy()" class="btn">Browse...</a>
            <div id="roxyCustomPanel" style="display: none;">
              <iframe src="/fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0">
              </iframe>
            </div>
        </div>
        <div class="formRow">
            <label>Side Image 2</label>
            <!-- <input type="text" name="image_new" value="<?php echo $image; ?>" class="textbox" /> -->
            <input style="width:500px; display: inline-block;" type="text" name="side_image_2_new" id="txtSelectedFile1" value="<?php echo $side_image_2; ?>" /> <span onclick="openCustomRoxy1()" class="btn">Browse...</a>
            <div id="roxyCustomPanel1" style="display: none;">
              <iframe src="/fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile1" style="width:100%;height:100%" frameborder="0">
              </iframe>
            </div>
        </div>
        <div class="formRow">
            <label>Side Image 3</label>
            <!-- <input type="text" name="image_new" value="<?php echo $image; ?>" class="textbox" /> -->
            <input style="width:500px; display: inline-block;" type="text" name="side_image_3_new" id="txtSelectedFile2" value="<?php echo $side_image_3; ?>" /> <span onclick="openCustomRoxy2()" class="btn">Browse...</a>
            <div id="roxyCustomPanel2" style="display: none;">
              <iframe src="/fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile2" style="width:100%;height:100%" frameborder="0">
              </iframe>
            </div>
        </div>
        <div class="formRow" style="margin-bottom: 50px;">
            <label>Post Content</label>
            <textarea name="content_new" class="pageEditor"><?php echo $content; ?></textarea>
        </div>
        <div class="formRow submit_form_container">
            <a href="/jobs/<?php echo $slug; ?>" target="_blank">Preview Post</a>
            <button type="submit" name="submit">Update Job</button>
        </div>
    </form>