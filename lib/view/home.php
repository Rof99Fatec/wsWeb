<?php

include_once("../../app.php");

iniciarSessao();

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>WEB</title>
    </head>
    <body>
        <nav class="navbar stick-top navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="../assets/icons/bootstrap.svg" alt="Bootstrap" class="d-inline-block align-text-top" width="30" height="30">
                    Website
                </a>
            </div>
        </nav>
        <div class="container text-center gap-3 my-5 min-vh-100">
            <div class="row">
                <div class="col">
                    <h1>Bem vindo ao WEBSITE !</h1>
                </div>
            </div>
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100" >
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 1</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 1</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 1</h5>
                                <p class="text-justify card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" >
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 2</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 2</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 2</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 3</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 3</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 3</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 4</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 4</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 4</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="tela_produtos.php" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 5</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 5</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 5</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 6</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 6</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 6</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 7</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 7</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 7</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 8</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 8</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 8</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>ITEM 9</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dominant-baseline="middle" text-anchor="middle">ITEM 9</text>
                            </svg>
                            <div class="card-body text-start">
                                <h5 class="card-title">ITEM 9</h5>
                                <p class="card-text text-justify">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vero inventore mollitia maxime dolores dolore sit quibusdam 
                                    exercitationem commodi dolorem iusto saepe provident, eos ullam, magni voluptate, molestias adipisci ipsam.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="?" class="btn btn-primary">Exemplo..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <img src="../assets/icons/bootstrap.svg" alt="Bootstrap" class="d-inline-block align-text-center" width="30" height="30">
                        <span class="mb-3 mb-md-0 text-body-secondary">Website © 2023 Company, Inc</span>
                    </a>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img src="../assets/icons/twitter.svg" alt="Twitter" class="d-inline-block" width="24" height="24"></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img src="../assets/icons/instagram.svg" alt="Instagram" class="d-inline-block" width="24" height="24"></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img src="../assets/icons/facebook.svg" alt="Facebook" class="d-inline-block" width="24" height="24"></a></li>
                </ul>
            </footer>
        </div>
    <script src="../../js/jquery-3.6.4.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/app.js"></script>
    </body>
</html>