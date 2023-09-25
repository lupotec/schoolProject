<?php

//Lege variabelen aanmaken
$upartist="";
$upsong="";
$upyt="";
$updaten=0;



// als update gepost is en deze is niet leeg deze is nummeriek updaten op 1 zetten
if(isset($_POST['upId']) && !empty($_POST['upId']) && is_numeric($_POST['upId']))
{
	$upId=$_POST['upId']; 
	$updaten=1;
}





// als artist gepost is en deze is niet leeg dan is de variabele artist het geposte ipv leeg
if(isset($_POST['upArtiest']) && !empty($_POST['upArtiest']))
{
	$upartist=$_POST['upArtiest']; 
}




// als de song gepost is en deze is niet leeg dan is de variabele song het geposte ipv leeg
if(isset($_POST['upSong']) && !empty($_POST['upSong']))
{
	$upsong=$_POST['upSong'];
}




// als yt gepost is en deze is niet leeg dan is de variabele yt het geposte ipv leeg
if(isset($_POST['upYt'])   && !empty($_POST['upYt']))
{
	$upyt=$_POST['upYt'];
}


if($updaten==1)
{
	
	$sql = "UPDATE muziekbib 
			SET 
			artiest	='$upartist',
			song	='$upsong',
			yt		='$upyt' 
			WHERE id='$upId' ";
			
	if ($con->query($sql) === TRUE) 
	{
		
		echo "<div class='alert alert-success alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Success!</strong> ".$artist." met ".$song." aangepast!";
		echo"</div>";
	  
	} else {
		
		echo "<div class='alert alert-warning alert-dismissible'>";
		echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		echo"<strong>Niet aangepast!</strong> ".$artist.": , ".$song;
		echo"</div>";
		//echo "Error: " . $sql . "<br>" . $con->error;
		
	}
}
