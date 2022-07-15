 <?php


    if(isset($_POST['submit'])) {
    
    $add_page = $_POST['add_page'];
    $seo_name = doSeo($add_page);
                                                                                                                                       
                            
    $result = mysql_query("INSERT INTO page (slug, name, meta_title, meta_description, content, image, visible, sort_order) VALUES ('$seo_name','$add_page','','','Coming soon.','','0','0')");


    echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Page created successfully.</p></div>";                

    }

?>

<h1>Add a Page</h1>
<p>Using the form below enter the name of your new page. By default the page be 'hidden' until you add content and make it visible.</p>



    <form method="post" action="?app=add">
        
        <div class="formRow">
            <label>Page Name</label>
            <input type="text" name="add_page" class="textbox" />
        </div>
        <div class="formRow">
            <button type="submit" name="submit" value="Create Page" class="btn" >Submit</button>
        </div>

    </form>

<br>