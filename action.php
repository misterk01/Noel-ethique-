<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/deco.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dimgrey text-uppercase" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Christmas Ethic Shop</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                                                                                                                              aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<section>
    <div class="container text-center">
        <h2 class="text-uppercase text-center text-white">About</h2>
        <hr class="star-light mb-5">

            <div class="text-center">
                <p class="lead">Merci <?php echo " " .$firstName=$_POST['firstName']. " " .$lastName=$_POST['lastName']. " "; ?>de nous avoir contacté.</p>
                <p>Vous souhaitez <?php echo $_POST['champ']  ?></p>

                <p class="lead">Un de nos conseiller vous contactera à l’adresse <?php echo " " .$email=$_POST['email']. " " ?>dans les plus brefs délais pour traiter votre demande : </p>
                <p style="font-size: 1.3em;"><strong><?php echo " " .$message=$_POST['message']. " "?></strong></p>
            </div>
    </div>
</section>
</body>
</html>







