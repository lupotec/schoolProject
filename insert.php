<?php
//Lege variabelen aanmaken
$artist="";
$song="";
$yt="";
$invoegen=0;



// als artist gepost is en deze is niet leeg dan is de variabele artist het geposte ipv leeg
if(isset($_POST['artist']) && !empty($_POST['artist']))
{
	$artist=$_POST['artist']; 
	$invoegen=1;
}




// als de song gepost is en deze is niet leeg dan is de variabele song het geposte ipv leeg
if(isset($_POST['song']) && !empty($_POST['song']))
{
	$song=$_POST['song'];
	$invoegen=1;
}




// als yt gepost is en deze is niet leeg dan is de variabele yt het geposte ipv leeg
if(isset($_POST['yt'])   && !empty($_POST['yt']))
{
	$yt=$_POST['yt'];
	$invoegen=1;
}




// ALS invoegen op 1 staat, dan pas invoeren in de db
if($invoegen==1)
{
	
	
	$sql = "INSERT INTO muziekbib 
	(artiest, song, yt)
	VALUES 
	('$artist', '$song', '$yt')";



	if ($con->query($sql) === TRUE) 
	{
		
		echo "<div class='alert alert-success alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Success!</strong> ".$artist." met ".$song." goed ingevoerd!";
		echo"</div>";
	  
	} else {
		
		echo "<div class='alert alert-warning alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Niet gelukt!</strong> ".$artist.": , ".$song;
		echo"</div>";
		//echo "Error: " . $sql . "<br>" . $con->error;
		
	}


}
//var_dump($_POST);

?>
