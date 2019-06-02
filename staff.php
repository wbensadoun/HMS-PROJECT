<!doctype html>
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
    <form action="stafffunc.php" method="post">
      <div class="row">
        <div class="col-6">
          <label for="inputnom">Nom</label>
          <input type="text" class="form-control" id="lastname" placeholder="Nom">
        </div>
        <div class="col-6">
          <label for="inputprenom">Prénom</label>
          <input type="text" class="form-control" id="firstname" placeholder="Prénom">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="inputTel">Numéro de téléphone :</label>
          <input type="text" class="form-control" id="phone" placeholder="Numéro">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        
        <div class="form-group col-md-6">
          <div class="photo-container" style="width : 100px; height : 100px; 
    background-color: grey;
    background-image: url('nophoto.png');
    background-repeat: no-repeat;
    background-size: 7rem 5.5rem;
    background-position: 50%;">
          </div>
        </div>
        <input type="file" value="choisir une photo" id="fileinput" style="display : none;">
        <div class="form-group col-md-6">
          <label for="inputspecialite">Specialité</label>
          <select id="specialite" class="form-control">
            <option selected>Choisir</option>
            <option>Cardiologie</option>
            <option>Généraliste</option>
            <option>Oncologie</option>
            <option>ORL</option>
          </select>
        </div>
      </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
  <button type="submit" id="addId" class="btn btn-primary" style="float: right;">Ajouter</button></div>
  </div>
  </form>
  </div>
</body>
<script>
$('.photo-container').on('click', function(){
  console.log('test')
  $('#fileinput').click();
})

$('#addId').on('click', function(e) {
  e.preventDefault();
  var nom = $('#lastname').val();
  var prenom = $('#firstname').val();
  var email = $('#email').val();
  var phone = $('#phone').val();
  var specialite = $('#specialite').val();

  var data={
    nom : nom, prenom : prenom,  email : email, phone : phone, specialite : specialite
          }

$.post("stafffunc.php", {data: JSON.stringify(data)},function(response){
            console.log( "Data Loaded: ", response);
            history.pushState({url: "viewstaff.php"}, "", "viewstaff.php");
            document.location.reload(true); 
        });
})
</script>
</html>