<head>
	<meta http-equive="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<form method="post" action="action.php">
	<div class="row">
		<header  class="col-md-offset-4 col-md-6">
			<h1>Enregistrement</h1>
		</div>
	</header>

	<div class="container">
		<form class="col-md-offset-3 col-md-6">

			<div class="row">
				<div class="form-group"> 
					<label for="nom" class="col-md-3">Nom :</label>
					<div class="col-md-6">
						<input type="text" id="nom" class="form-control">

					</div>
				</div>
			</div>	

			<div class="row">
				<div class="form-group" >
					<label class="col-md-3">Prenom :</label>
					<div class="col-md-6">
						<input type="text" id="prenom"  class="form-control">

					</div>
				</div>
			</div>	

			<div class="row">
				<div class="form-group">
					<label class="col-md-3">Email :</label>
					<div class="col-md-6">                                                           
						<input type="email" class="form-control" name="email" id="email"  class="form-control">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group">
					<label r t(dx class="col-md-3">Password :</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password" id="password"  class="form-control">
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="form-group">
					<label  class="col-md-3" class="form-check-label" for="Sexe">Sexe :</label>
					<input type="checkbox" class="form-check-input" id="Homme" class="form-control"> 
					<label for="Homme">Homme</label> &nbsp;
					<input type="checkbox" class="form-check-input" id="Femme" class="form-control">
					<label for="Femme">Femme</label>            
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-3">justificatif de domicile :</label>
					<input type="file" name="justificatif">
				</div>
			</div>
			</div>
			<div class="row">
				<br><center><button type="button" class="btn btn-primary">S'enregistrer</button>
			<button type="button" class="btn btn-danger">Annuler</button>
	<button type="button" class="btn btn-info">Connexion <span class="glyphicon glyphicon-user"></span></button></center></br>
			</div>
		</div>
	</form>
</body>
