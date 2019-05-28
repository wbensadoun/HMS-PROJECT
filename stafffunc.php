<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hmsdb");
if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialite = $_POST['specialite'];
    $id = 111111;

    $query = " INSERT INTO staff (id,nom,prenom,email,phone,specialite)
    values ('" + $id + "','" + $nom + "' ,'" + $prenom + "','" + $email + "','" + $phone + "','" + $specialite + "');";
    $result=mysqli_query($con,$query);
} else {
    echo 'error';
}
