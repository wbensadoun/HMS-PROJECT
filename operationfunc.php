<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hmsdb");

if(isset($_POST['data'])){
    $data = json_decode($_POST['data']);
    $date = $data->date;
    $patient = $data->patient;
    $medecin = $data->medecin;
    $operation = $data->operation;
    $bloc = $data->bloc;
    $id = random_int(1, 1000000);

    $query = "insert into operation (id,date,patient,medecin,operation,bloc) values (" . $id . ",'" . $date . "' ,'" . $patient . "','" . $medecin . "','" . $operation . "','" . $bloc . "');";
    $result=mysqli_query($con,$query);
    if($result) 
	{
		echo "<script>alert('Opération enregistrer.')</script>";
	}
} 
function get_operation_details(){
    global $con;
    $query="select * from operation";
    $result= mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
    $date=$row['date'];
    $patient=$row['patient'];
    $medecin=$row['medecin'];
    $operation=$row['operation'];		
    $bloc=$row['bloc'];

    echo 
    "<tr>
      <th scope='col'>$date</th>
      <th scope='col'>$patient</th>
      <th scope='col'>$medecin</th>
      <th scope='col'>$operation</th>
      <th scope='col'>$bloc</th>
    </tr>";
    }
}

?>
