<?php
    
    $page = $_GET["page"];
    
    if(isset($_POST['submit'])) {   
    
    $name_new = $_POST["name_new"];
    $seo_name_new = doSeo($name_new);
    $meta_title_new = $_POST["meta_title_new"];
    $meta_description_new = $_POST["meta_description_new"];
    $content_new = $_POST["content_new"];
    
    $result = mysql_query("UPDATE page SET slug = '$seo_name_new', name = '$name_new', meta_title = '$meta_title_new', meta_description = '$meta_description_new', content = '$content_new' WHERE id='$page'") or die(mysql_error());

    echo "<div class=\"success\"><p><img src=\"images/yes.svg\"> Wahoo! Page successfully updated.</p></div>";

    }

    // get current page data
    
    $result = mysql_query("SELECT * FROM page WHERE id = $page");
    $returnres = mysql_num_rows($result);
    if($returnres=="0"){
    }else{
    while($row = mysql_fetch_array($result))
    {
    $id = $row["id"];   
    $name = $row["name"];
    $meta_title = $row["meta_title"];
    $meta_description = $row["meta_description"];
    $content = $row["content"];
    }
    }

?>

<h1>Edit Page: <?php echo $name; ?></h1>

    <form method="post" action="?app=edit&page=<?php echo $page; ?>">
        <div class="formRow">
            <label>Page Name</label>
            <input type="text" name="name_new" value="<?php echo $name; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Meta Title</label>
            <input type="text" name="meta_title_new" value="<?php echo $meta_title; ?>" class="textbox" />
        </div>
        <div class="formRow">
            <label>Meta Description</label>
            <input type="text" name="meta_description_new" value="<?php echo $meta_description; ?>" class="textbox" />
        </div>

    
        <div class="formRow">
            <label>Page Content</label>
            <textarea name="content_new" class="pageEditor"><?php echo $content; ?></textarea>
        </div>
        <div class="formRow">
            <button type="submit" name="submit">Update Page</button>
        </div>
    </form>