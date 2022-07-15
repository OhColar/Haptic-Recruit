<?php
    
    $post = $_GET["post"];
    
    if(isset($_POST['submit'])) {   
    
    $title_new = $_POST["title_new"];
    $slug_title_new = doSeo($title_new);
    $post_date_new = $_POST["post_date_new"];
    $content_new = $_POST["content_new"];
    $meta_description_new = $_POST["meta_description_new"];
    $image_new = $_POST["image_new"];
    
    $result = mysql_query("UPDATE hubs SET slug = '$slug_title_new', title = '$title_new', content = '$content_new', meta_description = '$meta_description_new', image = '$image_new' WHERE id='$post'") or die(mysql_error());

    echo "<div class=\"success\"><p><img src=\"images/yes.svg\"> Wahoo! Hub successfully updated.</p></div>";

    }

    // get current post data
    
    $result = mysql_query("SELECT * FROM hubs WHERE id = $post");
    $returnres = mysql_num_rows($result);
    if($returnres=="0"){
    }else{
    while($row = mysql_fetch_array($result))
    {
    $id = $row["id"];   
    $title = $row["title"];
    $slug = $row["slug"];
    $post_date = $row["post_date"];
    $content = $row["content"];
    $meta_description = $row["meta_description"];
    $image = $row["image"];
    }
    }

?>

<h1>Edit Post: <?php echo $title; ?></h1>

    <form method="post" action="?app=edit_hub&post=<?php echo $post; ?>">
        <div class="formRow">
            <label>Hub Name</label>
            <input type="text" name="title_new" value="<?php echo $title; ?>" class="textbox" />
        </div>
        <!-- <div class="formRow">
            <label>Post Date</label>
            <input type="date" name="post_date_new" value="<?php echo $post_date; ?>" class="textbox" />
        </div> -->
        <div class="formRow">
            <label>Short Description</label>
            <input type="text" name="meta_description_new" value="<?php echo $meta_description; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Feature Image</label>
            <!-- <input type="text" name="image_new" value="<?php echo $image; ?>" class="textbox" /> -->
            <input style="width:500px; display: inline-block;" type="text" name="image_new" id="txtSelectedFile" value="<?php echo $image; ?>" /> <span onclick="openCustomRoxy()" class="btn">Browse...</a>
            <div id="roxyCustomPanel" style="display: none;">
              <iframe src="/fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0">
              </iframe>
            </div>
        </div>
        <div class="formRow" style="margin-bottom: 50px;">
            <label>Post Content</label>
            <textarea name="content_new" class="pageEditor"><?php echo $content; ?></textarea>
        </div>
        <div class="formRow submit_form_container">
            <a href="/our-gaming-hubs/<?php echo $slug; ?>" target="_blank">Preview Post</a>
            <button type="submit" name="submit">Update Post</button>
        </div>
    </form>