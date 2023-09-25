<?php

$sql = "SELECT id, artiest, song, yt FROM muziekbib";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
	while($row = $result->fetch_assoc()) 
	{
		//DEL POP UP	
		echo"<div class='modal fade' id='delModal".$row["id"]."' role='dialog'>";
			echo"<div class='modal-dialog'>";
				echo"<div class='modal-content'>";
					echo"<div class='modal-header'>";
						echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
						echo"<h4 class='modal-title'>delete: <b>".$row["artiest"]." > ".$row["song"]."</b></h4>";
					echo"</div>";
					echo"<div class='modal-body'>";
						echo"<form action='./index.php' method='post'>";
						echo"<input type='hidden' class='form-control' value='".$row["id"]."' id='del' name='del'>";
						echo"<br>";
						echo"<button type='submit' class='btn btn-warning'>Verwijder</button>";
						echo"</form>";
					echo"</div>";
					echo"<div class='modal-footer'>";
						echo"<button type='button' class='btn btn-default' data-dismiss='modal'>Sluit</button>";
					echo"</div>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
		
		/////////////////////////////////////////////////////////////////////////////////////
		// UPDATE MODAL
		echo"<div class='modal fade' id='upModal".$row["id"]."' role='dialog'>";
			echo"<div class='modal-dialog'>";
				echo"<div class='modal-content'>";
					echo"<div class='modal-header'>";
						echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
						echo"<h4 class='modal-title'>Update: <b>".$row["artiest"]." > ".$row["song"]."</b></h4>";
					echo"</div>";
					echo"<div class='modal-body'>";
					
						echo"<form action='./index.php' method='post'>";
						
							
							echo"<input type='hidden' value='".$row["id"]."' id='upId' name='up'><br>";
							
							echo"<div class='form-group'>";
								echo"<label for='UpArtiest'>artiest:</label>";						
								echo"<input type='text' class='form-control' value='".$row["artiest"]."' id='upArtiest' name='upArtiest'>";
							echo"</div>";

							echo"<div class='form-group'>";
								echo"<label for='UpSong'>song:</label>";						
								echo"<input type='text' class='form-control' value='".$row["song"]."' id='upSong' name='upSong'>";
							echo"</div>";							
							
							echo"<div class='form-group'>";
								echo"<label for='UpYt'>YouTube:</label>";						
								echo"<input type='text' class='form-control' value='".$row["yt"]."' id='upYt' name='upYt'>";
							echo"</div>";							
							
							
						echo"<button type='submit' class='btn btn-warning'>Wijzig</button>";
						echo"</form>";
					
					echo"</div>";
					echo"<div class='modal-footer'>";
						echo"<button type='button' class='btn btn-default' data-dismiss='modal'>Sluit</button>";
					echo"</div>";
				echo"</div>";
			echo"</div>";
		echo"</div>";		
		
		/////////////////////////////////////////////////////////////////////////////////////////
		
		echo"<div class='row' STYLE='border:1px solid silver; color:#337ab7;'>";
		
			echo"<div class='col-xs-2'>";
			
				echo"<a href='#' data-toggle='modal' data-target='#delModal".$row["id"]."'>";
				echo"<i class='fa fa-trash-o' style='font-size:24px; color:red;'></i>";  
				echo"</a>";
				
				echo"<br>";
				
				echo"<a href='#' data-toggle='modal' data-target='#upModal".$row["id"]."'>";
				echo"<i class='fa fa-refresh' style='font-size:24px; color:grey;'></i>";  
				echo"</a>";
				
			echo"</div>";
			
			echo"<div class='col-xs-4' STYLE='color:black;'><b>".$row["artiest"]."</b></div>";
			echo"<div class='col-xs-4' STYLE='color:black;'><b>".$row["song"]."</b></div>";
			echo"<div class='col-xs-2'><b><a href='".$row["yt"]."'><i class='fa fa-youtube-play' 
			STYLE='color:red; font-size:24px;'></i></a></b></div>";
		echo"</div>";	
	
	}
 }

?>
