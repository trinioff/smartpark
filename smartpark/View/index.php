<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SmartPark</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
   <header>
      <div class="header">
        <h1>SmartPark</h1>
      </div>
    </header>
    <nav class="navbar navbar-darkbg-darkfixed-top">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h2>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <h2><a class="nav-link active" aria-current="page" href="index.html" style="color: rgb(255, 255, 255);">Accueil</a></h2>
                </li>
                <li class="nav-item">
                    <h2><a class="nav-link" href="parking.html" style="color: rgb(255, 255, 255);">Plan du parking</a></h2>
                </li>
              </form>
            </div>
          </div>
        </div>
      </nav>
<br>      
    <h2><u>Formulaire</u></h2>
        <div class="formulaire">
            <form action="../controller/formUserController.php" method="post">
                <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="surname" required>
        
                <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="name" required>

                <label for="immatriculation">Immatriculation :</label>
                    <input type="text" placeholder="XX-XXX-XX" id="immatriculation" name="immat" required>
        
                <label for="contact">Email ou Numéro de téléphone :</label>
                    <input type="text" id="contact" name="email" required>
            </form>
            <form action="../controller/formVehiculeController.php" method="post">
                <label for="type_vehicule">Type de Véhicule :</label>
                <select id="type_vehicule" name="vehicletype">
                    <option value="car">Voiture</option>
                    <option value="elecar">Voiture éléctrique</option>
                    <option value="bike">Moto</option>
                </select>
                <label>
                    <div class="handicape">
                        Place Handicapé. 
                        <input type="checkbox" id="accepterConditions" name="handicaped">
                    </div>     
                </label>
                    <div class="bouton">
                        <input type="submit" value="Envoyer" name="formulaire">
                    </div>
            </form>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
