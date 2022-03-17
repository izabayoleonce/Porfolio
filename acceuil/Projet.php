<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles\pojet.css">   
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Projet</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
        <h4>Leonce IZABAYO</h4>
        <div class="container">
            <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Acceuil</a>
            </li>
            <li class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Mon Profile</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./a_propos.php">Bio</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./entrprise.php">Mon Entreprise</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">projet</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Projet Professionnel</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Projet Personnel</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Projet Professionnel Encadré</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./veille.php" tabindex="-1" aria-disabled="true">Ma veille</a>
            </li>
            </ul>

        </div>
        <a  type="button" href="./document/LEONCE_IZABAYO_CV_ .pdf" class="btn btn-outline-success">Mon Cv</a>
        </nav>
    </header>

    <main>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div onclick="document.getElementById('ppe1').style.visibility='visible'" class="carousel-item active" data-bs-interval="10000">
                    <img src="image\ppp.jpg" class="d-block w-100" alt="Projet Personnel">
                    <div class="carousel-caption d-none d-md-block" id="legend">
                        <h5>Projet Proffessionnel Personnel</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image\ppe.jpg" class="d-block w-100" alt="Projet Proffessionnel Encadret">
                    <div class="carousel-caption d-none d-md-block" id="legend">
                        <h5>Projet Proffessionnel encadrer</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img onclick="" src="image\ppi.jpeg" class="d-block w-100" alt="Projet en Entreprise">
                    <div class="carousel-caption d-none d-md-block" id="legend">
                        <h5>Projet Proffessionnel en Entreprise</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 

        <div class="ppe1" id="ppe1" style="visibility: hidden;">
            <p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="./image/ppe1/connection.png" class="card-img-top" alt="ppe1">
                                <div class="card-body">
                                    <h5 class="card-title">PPE1: ligne de frais</h5>
                                    <p class="card-text">Ce ppe avait pour but creér un site pour une association sportive; <br>Le but était que les utilisateur arrivant sur le site <br>Si<li>il est inscrit, il se connecte sans probleme.</li><br>MAis Sinon <li>il s'inscrit pour acceder à la page d'acceuil</li><br> Ainsi il peut faire de renboursement sur ses frais  </p>
                                
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary stretched-link">Consulter</a>
                                </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./image/ppe2/connection.png" class="card-img-top" alt="ppe2">
                            <div class="card-body">
                                <h5 class="card-title">Gestion des resustat des match de basket par les utilisateur </h5>
                                    <p class="card-text">Ce ppe est diviser en deux partie.
                                        <li>la gestion de resultat par les utilisateur</li>
                                        les utilisateur arrive, se connecte afin d'accéder à aux match du jours pour inseret les resultat.
                                        <li>la getion des utilisateur</li>
                                        L'admin se connecte est accéder à sa page,<br> pour activer d'autre utilisateur<br> pour qu'ils puisse insert les resultat des match <br> ou supprimer les utilisateur indesirable 
                                    </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary stretched-link">Consulter</a>
                            </div>
                        </div>
                    </div>
                </div>

            </p>
        </div>
    </main>
    <footer>
        <a href="tel:+330676770328"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg></a>
        <a href="https://twitter.com/izabayoleonce"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
        <a href="http://www.linkedin.com/in/leonce-izabayo/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg></a>
        <a href="mailto:Leonce.Izabayo@outlook.fr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg></a>

    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>