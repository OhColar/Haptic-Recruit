<?php
    
    include "inc/functions.php";

    $page = $_GET['page'];
    $article = $_GET['article'];

    if(!$page) {
        $page = "home";
    }

    $resultMeta = mysql_query("SELECT * FROM page WHERE slug = '$page'");
    while($row = mysql_fetch_array($resultMeta))
    {
        $slug = $row['slug'];
        $page_title = $row['name'];
        $meta_title = $row['meta_title'];
        $meta_description = $row['meta_description'];
        $content = $row['content'];
        $value = $row['value'];

    }

    // create page layout

        // header

        include "pages/partials/header.php";
        
        // set templates

        if (file_exists("pages/$page.php")) {  
            include "pages/$page.php"; 
        } else {
            include "pages/inner.php"; 
        }     

        // footer

        include "pages/partials/footer.php";

?>


