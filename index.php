<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/deco.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

</head>

<body id="page-top">
<?php

$firstNameErr = $lastNameErr = $emailErr = $messageErr = "";
$firstName = $lastName = $email = $message = $don = $other = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["firstName"]))) {
        $firstNameErr = "Entrez votre prénom";
    } else {
        $name = test_input($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
            $firstNameErr = "Caractères seulement !";
        }
    }

    if (empty(trim($_POST["lastName"]))) {
        $lastNameErr = "Entrez votre nom svp!";
    } else {
        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            $lastNameErr = "caractères seulement !";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Entrez votre mail svp !";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "format invalide";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Entrez un message svp !";
    } else {
        $message = test_input($_POST["message"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (($_SERVER["REQUEST_METHOD"] == "POST") and empty($firstNameErr) and empty($lastNameErr) and empty($emailErr) and isset($_POST['champ'])) {
    header("Location:action.php");
    exit;
}
?>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dimgrey text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Christmas Ethic Shop</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Idées alternatives</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About la Page</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-white text-center">
        <div class="container">
            <h1>Réveillons Autrement</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Profitez des fêtes le coeur léger</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Idées Alternatives</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="img  à modifier/sapin3.jpeg"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-2">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="assets/img/bougie.jpeg"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-3">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="assets/img/img-card2.jpg"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-4">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="assets/img/foie_gras.jpeg"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-5">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="assets/img/crevetteResize.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-6">
                        <div class="d-flex portfolio-item-caption position-absolute ">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid fixImg" src="assets/img/pereNoel.jpeg"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary text-white mb-0">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">About la Page</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Les fêtes de fin d'année, c'est la période de tous les excès, de la surconsommation à outrance. Mais pas question d'y échapper, c'est vraiment trop bon !!! </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Il suffit d'un peu de bon sens pour définir les limites que l'on souhaite s'imposer, le tout sans ruiner notre santé, notre portefeuille,...et notre planète.</p>
                </div>
            </div>
           <!-- <div class="text-center mt-4"><a class="btn btn-outline-light btn-xl" role="button" href="#"><i class="fa fa-download mr-2"></i><span>C'est par là que ça se passe</span></a></div>-->
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Contactez-nous</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" action="action.php" method="post">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label for="first_name">Prénom</label>
                                <input class="form-control" type="text" name="firstName" id="first_name" placeholder="Prénom" required>
                            </div>
                            <span class="error"><?php echo $firstNameErr; ?></span>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label for="name">Nom</label>
                                <input class="form-control" type="text" name="lastName" id="name" placeholder="Nom" required>
                            </div>
                            <span class="error"><?php echo $lastNameErr; ?></span>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label for="mail">Email</label>
                                <input class="form-control" type="email" name="email" id="mail" placeholder="Email">
                                <small class="form-text text-danger help-block"></small>
                            </div>
                        </div>



                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-5 pb-2">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="4"></textarea>
                                <small class="form-text text-danger help-block"></small></div>
                            <span class="error"><?php echo $messageErr; ?></span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="champ" id="exampleRadios1" value="faire un don">
                            <label class="form-check-label" for="exampleRadios1">
                                Faire un don
                            </label>

                            <input class="form-check-input" type="radio" name="champ" id="inputRadios2" value="participer à un évènement">
                            <label class="form-check-label" for="exampleRadios2" id="labelRadios2">
                                Participer à un évènement
                            </label>
                        </div>

                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Envoyez</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p>17 rue Delandine<br>69002 Lyon</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Wild Code School</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.wildcodeschool.com/fr-FR"><i class="fa fa-dribbble fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Développeur</h4>
                    <p class="lead mb-0"><span>Un métier de passion et d'abnégation.&nbsp;</span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;WCS Hackaton 2019</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Créer un sapin en bois flotté</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="./assets/img/diy-arbre-de-noël-sapin-noel-original-bois-flotté-howne.com_.jpg">
                                <p class="mb-5">Le plus compliqué dans ce projet est de trouver du bois flotté. L'idéal est de le récupérer sur une plage, le sel permettant le séchage optimum en conservant l'intégrité de la matière. L'avantage : de nombreuses années pour en profiter.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Privilégier la technologie led</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/guirlande_led.jpeg">
                                <p class="mb-5"><strong>Les raisons du succès de l’éclairage led :</strong><br> Économie d’énergie, Durabilité, Sans danger pour les usagers, Écologique, Eclairage adaptatif.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Halte au gâchis</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/jouetBois.jpeg">
                                <p class="mb-5">"Investissez" dans des cadeaux durables, en bois pourquoi pas.
                                    Les fabricants français actuels ne travaillent que des essences de bois locales, et gèrent la culture sylvestre de façon éco-responsable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Sauvez les oies et les canards</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/faux_gras.jpeg">
                                <p class="mb-5">Si vous êtes opposé à l'élevage et au gavage des anatidés,
                                    des produits de remplacement ont vu le jour : bon courage... </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Sauvez les crevettes !!!</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/veggie_crevettes.jpeg">
                                <p class="mb-5">Ou plutôt <strong>"Sauvez-vous, des crevettes molles !"</strong><br> L'invasion des crevettes végétales a débuté, et c'est juste immangeable.
                                    Sauver la planète peut-être, mais il y a des limites à ne pas dépasser...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Il faut que ça change,<br> y en a marre des barbus !!!</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/mereNoel.jpeg">
                                <p class="mb-5">Quelle bonne idée...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>