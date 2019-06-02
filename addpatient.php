<!DOCTYPE html>
<html>
<head>
	 <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('image3.jpg'); height: 250px; background-size: cover; no-repeat;"></div>
<div class="container-fluid">
<div class="row">
	<div class="col-md-3"></div>
<div class="col-md-5">
		<div class="card">
		<div class="card-body" style="background-color:#3398DB; color:#ffffff;">
				<h3>Planning :</h3>
			</div>
			<div class="card-body">
				<form class="form-group" action="func.php" method="post">
					<label>Nom :</label>
	<input type="text" name="nom" class="form-control"><br>
					
					<label>Prenom :</label>
	<input type="text" name="prenom" class="form-control"><br>

					<label>Email :</label>
	<input type="text" name="email" class="form-control"><br>

					<label>Contact :</label>
	<input type="text" name="contact" class="form-control"><br>
					
					<label>Planning Docteur :</label>
	<select class="form-control" name="docapp">
					<option value="Dr.Webber From 6pm to 9pm">Dr.Webber de 9h à 14h</option>
					<option value="Dr.Shepperd From 6pm to 9pm">Dr.Shepperd de 12h à 16h</option>
					<option value="Dr.Grey From 6pm to 9pm">Dr.Grey de 15h à 19h</option>

		</select><br>
		<div class="row">
<div class="col-md-6">
<input type="submit" name="pat_submit" class="btn btn-primary" value="Entrer le rendez-vous"></div>

<div class="col-md-6">
<a href="admin-panel.php" class="btn btn-danger" style="margin-left:70%;">Retour</a>
		
</div>
</div>
</div>
</form>
		<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>