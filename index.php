<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muziek Bibliotheek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
 
 
<div class="container">
  
  
  	<br><h3>Mijn naam</h3>
  
  
	<div class="panel panel-primary">

		<div class="panel-heading">
			<h2>Song toevoegen:</h2>
		</div>

		<div class="panel-body">
			<form action="./index.php" method='POST'>
				<div class="form-group">
					<label for="usr">Artiest:</label>
					<input type="text" class="form-control" id="usr" name='artist'>
				</div>
				<div class="form-group">
					<label for="song">Song:</label>
					<input type="text" class="form-control" id="song" name ='song'>
				</div>
				<div class="form-group">
					<label for="yt">YouTube:</label>
					<input type="text" class="form-control" id="yt" name='yt'>
				</div>				
				
				<button type="submit" class="btn btn-default">Voeg toe</button>
			</form> 
		</div>

	</div>
  
  
	<div class="panel panel-primary"> 
		<div class="panel-body">
			<div class='row' STYLE='border:1px solid blue; background-color:#337ab7; color:white;'>
				<div class="col-xs-2"></div>
				<div class="col-xs-4"><b>Artiest:</b></div>
				<div class="col-xs-4"><b>Song:</b></div>
				<div class="col-xs-2"><b>YouTube</b></div>
			</div>
			
			<!--   SELECT LIJST   -->
			
			
			
		</div>
	</div>
  
  
  
  
  
</div> <!--einde container-->



</body>
</html>
