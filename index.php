<!DOCTYPE html>
<html>
    <head>
       <meta http-equive="X-UA-Compatible" content="IE=edge">
     <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="hmslogin.css" rel="stylesheet">
    </head>
    <body>        
        <div class="container-fluid">  
<form class="form-group" action="func.php" method="post">       

<center><h1>Connectez vous</h1></center>
                <div class="row">         
                  <div class="form-group">
                    <label class="col-md-5"></label>  
                <div class="col-offset-1-md-8">
     <input class="form-control" type="text" name="username" placeholder="Username" required/>
      </div>
      </div>
      </div>
                <div class="row">
                  <div class="form-group">
                              <label class="col-md-5"></label>
                <div class="col-offset-1-md-8">
      <input class="form-control" type="password" name="password" placeholder="Mot de passe" required/>
      </div>
    </div>
      </div>
                
                <div class="form-group">
                <center>
<button type="submit" class="btn btn-danger" name="login_submit">Connection<span class="glyphicon glyphicon-user"></span></button>
                </center>
                </div>
</form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

