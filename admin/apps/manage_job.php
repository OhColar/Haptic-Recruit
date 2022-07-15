<?php

$function = $_GET["function"];
$id = $_GET["id"];
$value = $_GET["value"];

if($function=="delete") {	
	
	mysql_query("DELETE FROM jobs WHERE id = $id");
	echo "<div class=\"success\"><p><img src=\"images/yes.svg\" />Job successfully deleted.</p></div>";				
	
	}
	
if($function=="update") {	
	
	mysql_query("UPDATE jobs SET visible = $value WHERE id = $id");
				
	}


?>

<h1>Manage Jobs</h1>

<p>Here you can edit jobs, choose whether to make a job visible or hidden, or delete them completely.</p>


<div class="grid grid--gutters pages pages_title">
	<div class="grid-cell gs-twothirds">
		<div>
			<h4>Job Title</h4>
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

	$result = mysql_query("SELECT * FROM jobs ORDER BY post_date DESC");
	$returnres = mysql_num_rows($result);
	if($returnres=="0"){
	}else{
	while($row = mysql_fetch_array($result))
	{
	$id = $row["id"];					
	$visible = $row["visible"];
	$title = $row["title"];	

?>
	<div class="grid grid--gutters pages">
		<div class="grid-cell gs-twothirds">
			<div><p><strong><?php echo $title; ?></strong></p></div>
		</div>
		<div class="grid-cell">
			<div><a href="?app=edit_job&post=<?php echo $id ?>"><img src="images/edit.svg" title="Edit job"></a></div>
		</div>
		<div class="grid-cell">
			<?php
				if($visible=="1"){
				echo "<div><a href=\"?app=manage_job&function=update&id=$id&value=0#$id\" name=\"$id\"><img class=\"show_tick\" src=\"images/yes.svg\" title=\"Change to hidden\"></a></div>\r\n";
			}else{
				echo "<div><a href=\"?app=manage_job&function=update&id=$id&value=1#$id\" name=\"$id\"><img class=\"hide_tick\"src=\"images/no.svg\" title=\"Change to visible\"></a></div>\r\n";
			} ?>
		</div>
		<div class="grid-cell">
			<div><a href="?app=manage_job&function=delete&id=<?php echo $id ?>" onClick="return confirm('Are you sure you want to delete this job? Warning: this action cannot be undone.')"><img src="images/delete.svg" border="0" title="Delete"></a></div>
		</div>
	</div>
<?php
	}
}
?>
