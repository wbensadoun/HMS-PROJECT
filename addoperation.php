<!doctype html>
<?php include("operationfunc.php"); ?>
<html>

<head>
  <meta http-equive="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<div class="jumbotron" style="background: url('image3.jpg'); height: 300px; background-size: cover; no-repeat;"></div>
  <div class="container">
    <form action="operationfunc.php" method="post">
    <div class="row">
        <div class="col-3">
          <label for="dateid">Date</label>
          <input type="date" class="form-control" id="Dateid" placeholder="DD/MM/YYYY">
        </div>
        </div>
      <div class="row">
        <div class="col-6">
          <label for="inputpatient">Patient</label>
          <input type="text" class="form-control" id="patient" placeholder="Nom & Prénom">
        </div>
        <div class="col-6">
          <label for="inputmedecin">Medecin</label>
          <input type="text" class="form-control" id="medecin" placeholder="Dr.">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="inputoperation">Operation</label>
          <input type="text" class="form-control" id="operation" placeholder="Opération">
        </div>
        
        <div class="col-3">
          <label for="inputbloc">Bloc</label>
          <input type="text" class="form-control" id="bloc" placeholder="Bloc">
        </div>
        </div>
      </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
  <button type="submit" id="addId" class="btn btn-primary"style="margin-left:80%;">Ajouter</button></div>
  <div><a href="admin-panel.php" class="btn btn-danger" style="margin-left: 1%;">Retour</a></div>  
  </div>
  </form>
  </div>
</body>
<script>


$('#addId').on('click', function(e) {
  e.preventDefault();
  var date = $('#dateid').val();
  var patient = $('#patient').val();
  var medecin = $('#medecin').val();
  var operation = $('#operation').val();
  var bloc = $('#bloc').val();
  var data={
    date : date, patient : patient,  medecin : medecin, operation : operation, bloc : bloc
          }
console.log(data)
/*$.post("addoperation.php", {data: JSON.stringify(data)},function(response){
            console.log( "Data Loaded: ", response);
            history.pushState({url: "tableoperation.php"}, "", "tableoperation.php");
            document.location.reload(true); 
        });*/
})
</script>
</html>