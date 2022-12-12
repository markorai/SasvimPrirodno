
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sasvim Prirodno</title>
  </head>
  <body>
        <div class="section" id="home" >
            <!-- NAV BAR -->
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

            <!-- FORM -->
            <form action="login_validation.php" method="post">
     	<h2 class="text-center">Prijava</h2>
     	<?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger text-center mt-3" role="alert"> <?php echo $_GET['error']; ?> </div>
     	<?php } ?>
            <div class="row w-80 ml-5">
                    <div class="col-6 mt-5 text-center ">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" placeholder="Email" class="form-control text-center">
                    </div>
                    <div class="col-6 mt-5 text-center">
                        <label for="">Lozinka</label>
                        <input type="password" name="lozinka" id="" placeholder="Lozinka" class="form-control text-center">
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
            <row class="row mt-5 text-center">
                <div class="col-12">
                    <button class="btn btn-success w-50" name="btn-login">Prijava</button>
                </div>
            </row>
     </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
   