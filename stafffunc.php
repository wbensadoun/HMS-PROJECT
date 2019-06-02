<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hmsdb");

if(isset($_POST['data'])){
    $data = json_decode($_POST['data']);
    $nom = $data->nom;
    $prenom = $data->prenom;
    $email = $data->email;
    $phone = $data->phone;
    $specialite = $data->specialite;
    $id = random_int(1, 1000000);

    $query = "insert into staff (id,nom,prenom,email,phone,specialite) values (" . $id . ",'" . $nom . "' ,'" . $prenom . "','" . $email . "','" . $phone . "','" . $specialite . "');";
    $result=mysqli_query($con,$query);
    if($result) 
	{
		echo "<script>alert('Rendez-vous enregistrer.')</script>";
	}
} 
function get_staff_details(){
    global $con;
    $query="select * from staff";
    $result= mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $phone=$row['phone'];		
    $specialite=$row['specialite'];

    echo 
    "<tr>
      <td>$nom</td>
      <td>$prenom</td>
      <td>$email</td>
      <td>$phone</td>
      <td>$phone</td>
      <td>$specialite</td>
       </tr>";
    }
}

?>
