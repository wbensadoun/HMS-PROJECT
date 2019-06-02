<!DOCTYPE html>
<?php include("operationfunc.php"); ?>
<html>
<head>
	<title>Opérations</title>
	<meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="jumbotron" style="background: url('image3.jpg'); height: 300px; background-size: cover; no-repeat;"></div>
<div class="container">
<div class="card">
<div class="card-body" style="background-color:#3398DB; color:#ffffff;">
	<div class="row"> 
		<div class="col-md-4">
	<h3>Liste des Opérations</h3></div>
<div class="col-md-8">
	<form class="form-group" action="operationfunc.php" method="post">
	<div class="row">
	<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Rechercher" style="float: right;"></div>
	<div class="col-md-2"><input type="submit" name="operation_search_submit" class="btn btn-light" value="Rechercher"style="float: right;"></div>
</div>
	</form>
</div>
</div>
</div>	
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Patients</th>
      <th scope="col">Medecins</th>
      <th scope="col">Operation</th>
      <th scope="col">Bloc</th>
    </tr>
  </thead>
  <tbody>
  <?php get_operation_details(); ?>
  </tbody>
</table>
</div>
</div>

<div class="row">
<div class="col-md-12"><a href="admin-panel.php" class="btn btn-danger" style="margin-left: 85.5%;">Retour</a></div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>