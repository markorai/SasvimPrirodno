
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
              
              <!-- ALERT WELCOME MESSAGE -->

        <!-- CAROUSEL -->
        <section id="hero-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#hero-carousel" data-slide-to="1"></li>
                <li data-target="#hero-carousel" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active c-item">
                <img class="d-block w-100 c-img" src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide">
                <div class="carousel-caption">
                    <p class="mt-5 fs-3 text-uppercase">Neka sve u vašem životu bude</p>
                    <h1 class="display-1 fw-bolder text-capitalize">Sasvim Prirodno</h1>
                    <a class="btn btn-success px-5 py-2 fs-5 mt-5" href="#farmers">O nama</a>
                  </div>
              </div>
              <div class="carousel-item c-item">
                <img class="d-block w-100 c-img" src="https://images.pexels.com/photos/321545/pexels-photo-321545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Second slide">
              </div>
              <div class="carousel-item c-item">
                <img class="d-block w-100 c-img" src="https://images.pexels.com/photos/533360/pexels-photo-533360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#hero-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </section>
            <section class="overview ">
                <div class="container d-flex align-items-center h-100">
                    <div class="row w-100 text-center fs-4">
                        <div class="col-xl">
                            <i class="bi bi-bar-chart-fill"></i>
                            Najveća ponuda poljoprivrednih proizvoda u Crnoj Gori
                        </div>
                        <div class="col-xl">
                            <i class="fa-solid fa-hand-point-right"></i>
                            Vi birate gazdinstvo, mi isporucujemo proizvode
                        </div>
                        <div class="col-xl">
                            <i class="bi bi-patch-check-fill"></i>
                            1000+ zadovoljnih korisnika
                        </div>
                    </div>
                   
                    </div>
                    
            </section>

        </div>

        <!-- GAZDINSTVA -->
        <section class="section" id="farmers">
            <div class="aboutFamrers">
                <h4 class="text-center mt-5 text-uppercase">Najpopularnija gazdinstva</h4>
                <p class="text-center ">Proizvodi sa različitih gazdinstava u vašem domu</p>
            </div>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="https://images.pexels.com/photos/1023397/pexels-photo-1023397.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gazdinstvo Martinović</h5>
                                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, quas amet! Reiciendis animi neque itaque.</p>
                                  <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="https://images.pexels.com/photos/23876/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gazdinstvo Popović</h5>
                                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe assumenda facere nesciunt quo cupiditate repudiandae.</p>
                                  <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
                                </div>
                        </div>
                    </div>
    
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="https://images.pexels.com/photos/50707/cocoa-man-colombia-peasant-50707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gazdinstvo Kovačević</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, temporibus sed porro id rem at!</p>
                                  <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
                                </div>
                        </div>
                    </div>
                    
                  <div class="col-lg-4">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/50707/cocoa-man-colombia-peasant-50707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Gazdinstvo Kovačević</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, temporibus sed porro id rem at!</p>
                          <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
                        </div>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                  <img src="https://images.pexels.com/photos/50707/cocoa-man-colombia-peasant-50707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Gazdinstvo Kovačević</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, temporibus sed porro id rem at!</p>
                    <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
                  </div>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img
            src="https://images.pexels.com/photos/50707/cocoa-man-colombia-peasant-50707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gazdinstvo Kovačević</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, temporibus sed porro id rem
              at!</p>
            <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img
            src="https://images.pexels.com/photos/50707/cocoa-man-colombia-peasant-50707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gazdinstvo Kovačević</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, temporibus sed porro id rem
              at!</p>
            <a href="#" class="btn btn-primary">Pogledaj ponudu</a>
          </div>
        </div>
      </div>
      
      </div>
      </div>
      <div class="d-flex justify-content-center mt-3 display-3"  >
        <i class="fa-solid fa-angle-down" onclick="loadMore()" id="loadMore"></i>
      </div>
        </section>

        <!-- PRODAVNICA -->
        <h4 class="text-center mt-5 text-uppercase">Proizvodi</h4>
              <p class="text-center ">100% domaći proizvodi</p>

        <section class="section">
            <div class="wrapper-c">
              <div id="search-container">
                <input type="search" name="" id="search-input" class="form-control" placeholder="Naziv proizvoda">
                <button id="search-btn" class="btn btn-info">Pretraga</button>
              </div>
              <div class="buttons row m-auto">
                <button class="btn btn-outline-primary btn-value mr-2 mt-2 " onclick="filterProducts('Svi proizvodi')">Svi proizvodi</button>
                <button class="btn btn-outline-primary btn-value mr-2 mt-2" onclick="filterProducts('Mliječni proizvodi')">Mliječni proizvodi</button>
                <button class="btn btn-outline-primary btn-value mr-2 mt-2" onclick="filterProducts('Mesni proizvodi')">Mesni proizvodi</button>
                <button class="btn btn-outline-primary btn-value mr-2 mt-2" onclick="filterProducts('Voće i povrće')">Voće i povrće</button>
                <button class="btn btn-outline-primary btn-value mr-2 mt-2" onclick="filterProducts('Čajevi')">Čajevi</button>
                <button class="btn btn-outline-primary btn-value mr-2 mt-2" onclick="filterProducts('Sokovi')">Sokovi</button>
              </div>
              <div id="products"></div>
            </div>
        </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../app/index.js"></script>
  </body>
</html>
