<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1){
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
	else
	{
	$_SESSION['errmsg']="Login ou mot de passe incorrect";
	}
}
	if(isset($_POST['pat_submit']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query="insert into doctorapp(nom,prenom,email,contact,docapp)values('$nom','$prenom','$email','$contact','$docapp')";
	$result=mysqli_query($con,$query);
	if($result) 
	{
		echo "<script>alert('Rendez-vous enregistrer.')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}
function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result= mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)) {
	$nom=$row['nom'];
	$prenom=$row['prenom'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo 
	"<tr>
      <td>$nom</td>
      <td>$prenom</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
  	 </tr>";
	}

	
}
?>