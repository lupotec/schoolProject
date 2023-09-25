<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muziek Bibliotheek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
 
 
<div class="container">
  
  
  
  
  
	<div class="panel panel-primary">

		<div class="panel-heading">
			<h2>Song toevoegen:</h2>
		</div>

		<div class="panel-body">
			<form action="/index.php" method='POST'>
				<div class="form-group">
					<label for="usr">Artiest:</label>
					<input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
					<label for="song">Song:</label>
					<input type="text" class="form-control" id="song">
				</div>
				<div class="form-group">
					<label for="yt">YouTube:</label>
					<input type="text" class="form-control" id="yt">
				</div>				
				
				<button type="submit" class="btn btn-default">Voeg toe</button>
			</form> 
		</div>

	</div>
  
  
	<div class="panel panel-primary"> 
		<div class="panel-body">
			<div class='row' STYLE='border:1px solid blue; background-color:#337ab7; color:white;'>
				<div class="col-xs-5"><b>Artiest:</b></div>
				<div class="col-xs-5"><b>Song:</b></div>
				<div class="col-xs-2"><b>YouTube</b></div>
			</div>
			
			
			
			
		</div>
	</div>
  
  
  
  
  
</div> <!--einde container-->



</body>
</html>
