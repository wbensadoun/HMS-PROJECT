<?php 
$users = array('login'=> 'admin','mdp'=> 'admine','nom' => 'bensadoun','prenom'=> 'wissal');

$login = $_POST['login'];
$mdp = $_POST['mdp'];
$nom = 'nom';
$prenom = 'prenom';

if (isset($_POST['login']) && isset($_POST['mdp'])){

if (in_array($_POST['login'], $users) && in_array($_POST['mdp'], $users)){
  echo "Bienvenue"." ".$users['nom']," ".$users['prenom'];
  }
else {
	echo "vous n'êtes pas inscrits ! inscrivez vous";
}
}
?>

<?php
try
{
	$bd = new PDO ('mysql: host=localhost; dbname=dbgestionadresse; charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$rep = $bd->query('select * from user');

while($data = $rep->fetch()) {
	echo $data['Prenom'];
}

?>