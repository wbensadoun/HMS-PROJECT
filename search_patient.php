<html>
<head>
	<title>Détails des patients</title>
	<meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$search=$_POST['search'];
	$query="select * from doctorapp where contact='$search'";
	$result=mysqli_query($con,$query);
echo "<div class='container-fluid'>
	<div class='card'>
	<img src='image3.jpg' style='background-size: cover;height: 400px;' class='card-img-top'>
	<div class='card-body'>
	<table class='table table-hover'>
  <thead>
    <tr> 
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Medecin traitant</th>
    </tr>
  </thead>
  <tbody>";
while ($row=mysqli_fetch_array($result)) {
	$nom=$row['nom'];
	$prenom=$row['prenom'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo "<tr>
      <td>$nom</td>
      <td>$prenom</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";
}
	echo "</tbody></table></div></div><div class='row'>
<div class='col-md-12'class='card-body'>
<a href='patient_details.php' class='btn btn-danger' style='float: right;'>Retour</a></div>
</div></div>";
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
