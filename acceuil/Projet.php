<?php require_once "./view/header.php" ?>

    <title>Projet</title>


    <main class="projet">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div onclick="document.getElementById('ppp').style.visibility='visible'" onclick="document.getElementById('foot').style.visibility='hidden'" class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image\ppp.jpg" class="d-block w-100" alt="Projet Personnel">
                    <div class="carousel-caption d-none d-md-block" id="legend">
                        <h5>Projet Proffessionnel Personnel</h5>
                        <p></p>
                    </div>
                </div>
                <div onclick="document.getElementById('ppe1').style.visibility='visible'" onclick="document.getElementById('foot').style.visibility='hidden'" class="carousel-item" data-bs-interval="2000">
                    <img src="image\ppe.jpg" class="d-block w-100" alt="Projet Proffessionnel Encadret" width="400" height="600">
                    <div class="carousel-caption d-none d-md-block" id="legend">
                        <h5>Projet Proffessionnel encadrer</h5>
                        <p></p>
                    </div>
                </div>
                <div onclick="document.getElementById('ppent').style.visibility='visible'" onclick="document.getElementById('footer').style.visibility='hidden'" class="carousel-item">
                    <img onclick="" src="image\ppi.jpeg" class="d-block w-100" alt="Projet en Entreprise" width="400" height="600">
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="./image/pp3/FormVisiteur.png" class="card-img-top" alt="ppe2">
                            <div class="card-body">
                                <h5 class="card-title">GSBCR </h5>
                                    <p class="card-text">Ce ppe est repatis en trois.
                                        <li>la gestion des visiteur </li>
                                        les utilisateur arrive, se connecte afin d'accéder à aux match du jours pour inseret les resultat.
                                        <li>la gestion des Medicament</li>
                                        L'admin se connecte est accéder à sa page,<br> pour activer d'autre utilisateur<br> pour qu'ils puisse insert les resultat des match <br> ou supprimer les utilisateur indesirable 
                                        <li>la gestion des compte rendu</li>
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
        <div class="ppro" id="ppro" style="visibility: hidden;">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>