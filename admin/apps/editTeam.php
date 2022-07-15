<?php
    
    $page = $_GET["page"];
    
    if(isset($_POST['submit'])) {   
    
    $name_new = $_POST["name_new"];
    $description_new = $_POST["description_new"];
    
    
    $result = mysql_query("UPDATE team SET name = '$name_new', description = '$description_new' WHERE id='$page'") or die(mysql_error());

    echo "<div class=\"success\"><p><img src=\"images/yes.svg\"> Wahoo! Team Member successfully updated.</p></div>";

    }

    // get current page data
    
    $result = mysql_query("SELECT * FROM team WHERE id = $page");
    $returnres = mysql_num_rows($result);
    if($returnres=="0"){
    }else{
    while($row = mysql_fetch_array($result))
    {
    $id = $row["id"];   
    $name = $row["name"];
    $description = $row["description"];

    }
    }

?>

<h1>Edit: <?php echo $name; ?></h1>

    <form method="post" action="?app=editTeam&page=<?php echo $page; ?>">
        <div class="formRow">
            <label>Team Member Name</label>
            <input type="text" name="name_new" value="<?php echo $name; ?>" class="textbox" />
        </div>
    
        <div class="formRow">
            <label>Team Member Description</label>
            <textarea name="description_new" class="pageEditor"><?php echo $description; ?></textarea>
        </div>
        <div class="formRow">
            <button type="submit" name="submit">Update Team Member</button>
        </div>
    </form>