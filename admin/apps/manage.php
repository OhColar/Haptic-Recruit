<?php

$function = $_GET["function"];
$id = $_GET["id"];
$value = $_GET["value"];

if($function=="delete") {	
	
	mysql_query("DELETE FROM page WHERE id = $id");
	echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Page successfully deleted.</p></div>";				
	
	}
	
if($function=="update") {	
	
	mysql_query("UPDATE page SET visible = $value WHERE id = $id");
				
	}
	
//move up and down
	$moveup = $_GET["moveup"];	
	if($moveup){
	
		$result2 = mysql_query("SELECT sort_order FROM page WHERE id = $moveup");				
						while($row = mysql_fetch_array($result2))
						{
						$current_pos = $row["sort_order"];
						}
		mysql_query("UPDATE page SET sort_order = sort_order-1 WHERE id = $moveup");
		mysql_query("UPDATE page SET sort_order = $current_pos WHERE sort_order = $current_pos-1 AND id != $moveup");
		echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Order updated successfully.</p></div>";
	}
	$movedown = $_GET["movedown"];	
	if($movedown){
		
		$result2 = mysql_query("SELECT sort_order FROM page WHERE id = $movedown");				
						while($row = mysql_fetch_array($result2))
						{
						$current_pos = $row["sort_order"];
						}
		mysql_query("UPDATE page SET sort_order = sort_order+1 WHERE id = $movedown"); 
		mysql_query("UPDATE page SET sort_order = $current_pos WHERE sort_order = $current_pos+1 AND id != $movedown");
		echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Order updated successfully.</p></div>";
	}

?>

<h1>Manage Pages</h1>

<p>Here you can edit pages, choose whether to make pages visible or hidden, or delete them completely.</p>


<div class="grid grid--gutters pages pages_title">
	<div class="grid-cell gs-third">
		<div>
			<h4>Page Name</h4>
		</div>
	</div>
	<div class="grid-cell">
		<div>
			<h4>Edit</h4>
		</div>
	</div>
	<div class="grid-cell">
		<div>
			<h4>Visible</h4>
		</div>
	</div>
	<div class="grid-cell">
		<div>
			<h4>Delete</h4>
		</div>
	</div>
</div>

<?php			

	$result = mysql_query("SELECT * FROM page ORDER BY sort_order ASC");
	$returnres = mysql_num_rows($result);
	if($returnres=="0"){
	}else{
	while($row = mysql_fetch_array($result))
	{
	$id = $row["id"];					
	$visible = $row["visible"];
	$page_name = $row["name"];	

?>
	<div class="grid grid--gutters pages">
		<div class="grid-cell gs-third">
			<div><p><strong><?php echo $page_name; ?></strong></p></div>
		</div>
		<div class="grid-cell">
			<div><a href="?app=edit&page=<?php echo $id ?>"><img src="images/edit.svg" title="Edit page"></a></div>
		</div>
		<div class="grid-cell">
			<?php
				if($visible=="1"){
				echo "<div><a href=\"?app=manage&function=update&id=$id&value=0#$id\" name=\"$id\"><img src=\"images/yes.svg\" title=\"Change to hidden\"></a></div>\r\n";
			}else{
				echo "<div><a href=\"?app=manage&function=update&id=$id&value=1#$id\" name=\"$id\"><img src=\"images/no.svg\" title=\"Change to visible\"></a></div>\r\n";
			} ?>
		</div>
		<div class="grid-cell">
			<div><a href="?app=manage&function=delete&id=<?php echo $id ?>" onClick="return confirm('Are you sure you want to delete this page? Warning: this action cannot be undone.')"><img src="images/delete.svg" border="0" title="Delete"></a></div>
		</div>
	</div>
<?php
	}
}
?>
