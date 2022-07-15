 <?php


    if(isset($_POST['submit'])) {
    
    $add_post = $_POST['add_post'];
    $seo_name = doSeo($add_post);
    $today = date("Y-m-d");
                                                                                                                                       
                            
    $result = mysql_query("INSERT INTO hubs (slug, title, post_date, content, meta_description, image, featured, visible) VALUES ('$seo_name','$add_post','$today','','','','0','0')");


    echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Awesome! Hub has been created... time to <a href=\"/admin?app=manage_hub\">start writing</a>.</p></div>";                

    }

?>

<h1>Add a Hub</h1>
<p>Using the form below enter the name of your new hub. By default the page be <strong>hidden</strong> until you add content and make it visible.</p>



    <form method="post" action="?app=add_hub">
        
        <div class="formRow">
            <label>Hub Name</label>
            <input type="text" name="add_post" class="textbox" />
        </div>
        <div class="formRow">
            <button type="submit" name="submit" value="Create Post" class="btn" >Submit</button>
        </div>

    </form>

<br>