<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
    <div class="col-9 m-auto">
    <form action="index.php?connexion" class="col-lg-12" method="post">
                <legend>Connexion</legend>
                    <div class="form-group">
                        <label for="login">Votre identifiant</label>
                        <input type="text" id="login" placeholder="Votre identifiant" class="form-control" name="login">
                    </div>

                    <div class="form-group">
                        <label for="password" class="">Votre mot de passe</label> 
                        <input type="password" id="password" placeholder="Votre mot de passe" class="form-control" autocomplete="current-password" name="password">
                    
                    </div>
    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
    
                
                </form>
    </div>
    </div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>