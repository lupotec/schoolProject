<?php

//Lege variabelen aanmaken
$artist="";
$song="";
$yt="";
$verwijderen=0;



// als del gepost is en deze is niet leeg den is nummeriek
if(isset($_POST['del']) && !empty($_POST['del']) && is_numeric($_POST['del']))
{
	$delId=$_POST['del']; 
	$verwijderen=1;
}





// ALS verwijderen op 1 staat, dan pas invoeren in de db
if($verwijderen==1)
{
	$sql = "DELETE FROM muziekbib WHERE id='$delId'";

	
	if ($con->query($sql) === TRUE) 
	{
		
		echo "<div class='alert alert-success alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Success!</strong> ".$artist." met ".$song." verwijderd!";
		echo"</div>";
	  
	} else {
		
		echo "<div class='alert alert-warning alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Niet verwijdert!</strong> ".$artist.": , ".$song;
		echo"</div>";
		//echo "Error: " . $sql . "<br>" . $con->error;
		
	}


}
//var_dump($_POST);


?>
