<?php


$sql = "SELECT id, artiest, song, yt FROM muziekbib";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
	while($row = $result->fetch_assoc()) 
	{
		
		//<!--DEL MODAL TOEVEGEN-->
		
		echo"<div class='row' STYLE='border:1px solid silver; color:#337ab7;'>";
		
			echo"<div class='col-xs-2'><i class='fa fa-trash-o' style='font-size:24px; color:red;'> ";  
			echo"<!-- TRIGGER MODAL -->";
			echo"</i>";
			echo"</div>";
			
			echo"<div class='col-xs-4' STYLE='color:black;'><b>".$row["artiest"]."</b></div>";
			echo"<div class='col-xs-4' STYLE='color:black;'><b>".$row["song"]."</b></div>";
			echo"<div class='col-xs-2'><b><a href='".$row["yt"]."'><i class='fa fa-youtube-play' 
			STYLE='color:red; font-size:24px;'></i></a></b></div>";
		echo"</div>";	
	
	}
 }
  
  



?>
