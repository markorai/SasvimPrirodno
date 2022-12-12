<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../styles/registration.css">
    <title>Registracija</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="../images/Sasvim prirodno logo.png" alt="" class="navbar-brand" id="navbar-logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Početna <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Gazdinstva</a>
                    <a class="nav-item nav-link" href="#">Prodavnica</a>
                    <a class="nav-item nav-link " href="#" tabindex="-1" >Blog</a>
                    <a class="nav-item nav-link move-right " href="login.php"><i class="fa-solid fa-lock "></i>Prijava</a>
                    <a class="nav-item nav-link move-right" href="registration.php"><i class="fa-regular fa-user"></i>Registracija</a>
                  </div>
                </div>
              </nav>

              <!-- ALERT -->
              <?php
              if(isset($_GET["status"]))
               echo "<div class='alert alert-success alert-dismissible text-center' aria-label='close' role='alert'>" . "Uspješna registracija. Potrebno je izvršiti prijavu kako bi pristupili nalogu" ."</div>";
             
                ?>

    <!-- FORM -->
    <form method="POST" action="add_user.php">
        <div class="container">
          <h1 class="text-center">Registracija</h1>
          <p class="text-center">Molimo Vas popunite formu kako bi kreirali nalog</p>
            <div class="row mt-3">
                <div class="col-6">
                    <label for="ime">Unesite ime:</label>
                    <input type="text" class="form-control" placeholder="Ime" name="ime" >
                </div>
                <div class="col-6">
                    <label for="prezime">Unesite prezime:</label>
                    <input type="text" class="form-control" placeholder="Prezime" name="prezime" >
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <label for="ime">Unesite email:</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" >
                </div>
                <div class="col-6">
                    <label for="broj_telefona">Unesite broj telefona:</label>
                    <input type="text" class="form-control" placeholder="Broj telefona" name="broj_telefona" >
                </div>
            </div>
            <div class="row mt-4 d-flex justify-content-center text-center">
                <div class="col-12">
                    <label for="tip_naloga">Odaberite tip naloga:</label>
                    <select name="tip_naloga" >
                        <option value="korisnik" selected>Korisnik</option>
                        <option value="gazdinstvo" name="gazdinstvo" >Gazdinstvo</option>

                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <label for="lozinka1">Unesite lozinku:</label>
                    <input type="password" class="form-control" placeholder="Lozinka" name="lozinka1" >
                </div>
                <div class="col-6">
                    <label for="lozinka2">Ponovite lozinku:</label>
                    <input type="password" class="form-control" placeholder="Ponovite lozinku" name="lozinka2" >
                </div>
          </div>
          <div class="row mt-4 d-flex justify-content-center text-center">
                <div class="col-12">
                    <button class="btn btn-success w-50">Registracija</button>
                </div>
            </div>
        </div>
      </form>
</body>
</html>