<!DOCTYPE html>
<html>
<head>
    <?php
        require_once "functions.php";
        $services = getServices(14 );
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verstka</title>


    <link rel="stylesheet" href="css/site-style.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>

<header id="header" class="col-12  py-3 position-fixed fixed-top z-top px-3 bg-xl-brown">
    <div class="container d-flex flex-wrap">
        <a href="#" class="d-block col-2 col-xl-5">
            <img src="img/logo.png" alt="Site logo">
        </a>
        <div class="col-xl-7 d-none d-xl-flex justify-content-end align-items-center">
            <div id="burger" class="burger position-relative"><span></span>
            </div>
        </div>
        <nav id="navigation" class="main_nav col-8 col-xl-12 d-flex align-items-center pl-6 flex-xl-column">
            <ul class="d-flex list-style-none flex-xl-column">
                <li><a href="index.php">Home </a></li>

                <li><a href="#">All our Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="btn btn-outline d-none d-xl-inline-block px-3 py-2 modal_form_trigger"
                    id="make_an_appointment">Make an Appointment
            </button>
        </nav>
        <div class="col-2  d-flex align-items-center d-xl-none">
            <button class="btn btn-outline px-3 py-2 modal_form_trigger" id="make_an_appointment">Make an Appointment
            </button>
        </div>
    </div>
</header>
<main>
    <section id="banner" class="photo d-flex justify-content-center align-items-center">
        <div class="col-5 col-md-10 text-center text-white">
            <img src="img/barbertext.png" >
            <h1 class="pt-3"> Best Barber In Your Town</h1>
            <div class="text-center text-24 subtitle p-3 position-relative d-inline-block">Proffesional Care</div>
        </div>
    </section>

    <section id="service" >
        <div class="text-center py-5">
            <div class="text-center text-brown text-24 pt-5">
                <i class="fas fa-cut"></i>
            </div>
            <h2 class="text-light-brown text-42 font-weight-400 section_title d-flex flex-column align-items-center"> <div class="d-inline-block pb-3">Our Services</div></h2>
        </div>



        <div class="bg-white py-3 shadow container" >
            <div class="d-flex flex-wrap">

            <?php
                for($i=0;$i<count($services);$i++) {
                        echo' 
       
                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="'.$services[$i]["photo_services"].'" alt="s1">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                               '.$services[$i]["name"].'   
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">'.$services[$i]["prise"].'$</div>
                        </div>
                    </div>
                </div>
                ';
                    }
              ?>
            </div>
        </div>




            <div class="text-center py-3">
                <button class="	d-inline-block btn btn-brown text-16 font-weight-400 px-4 py-3 modal_form_trigger">Make an Apointment</button>
            </div>

        </div>
        <div class="text-brown text-42 text-center ">We are waiting for you!</div>
    </section>

    <footer id="contact" class="bg-brown">
        <div class="container d-flex flex-wrap pt-5">
            <div class="col-4 col-md-6 col-sm-12 pb-5 px-3 text-sm-center">
                <h3 class="text-white text-22 font-weight-400 py-4">Join With Us</h3>
                <a href="#" class="d-block font-weight-500 text-gray text-16 pb-2 modal_form_trigger">Make Appointment</a>
                <a href="tel:+10 378 478 2789" class="d-block font-weight-500 text-gray text-16 pb-2">+10 378 478 2789</a>
            </div>
            <div class="col-4 col-md-6 col-sm-12 pb-5 px-3 text-sm-center">
                <h3 class="text-white text-22 font-weight-400 py-4">Address</h3>
                <a href="#" class="d-block font-weight-500 text-gray text-16 pb-2">200, A-block, Green road</a>
                <a href="tel:+10 378 478 2789" class="d-block font-weight-500 text-gray text-16 pb-2">+10 378 478 2789</a>
                <a href="mailto:contact@nonprofit.com" class="d-block font-weight-500 text-gray text-16 pb-2">contact@nonprofit.com</a>
                <div class="d-flex pt-4 justify-content-sm-center">
                    <div class="col-pr-3">
                        <a href="#" class="fab fa-facebook-f px-2 text-gray"> </a>
                    </div>
                    <div class="col-pr-3">
                        <a href="#" class="fab fa-instagram px-2 text-gray"> </a>
                    </div>
                    <div class="col-pr-3">
                        <a href="#" class="fab fa-twitter px-2 text-gray"> </a>
                    </div>

                </div>
            </div>

            <div class="col-4 col-md-7 col-sm-12 pb-5 px-3 text-sm-center">
                <h3 class="text-white text-22 font-weight-400 py-4">Newsletter</h3>

                <div>
                    <form class="d-flex">
                        <input type="text" placeholder="Enter your mail" class="col-9 py-2 px-3 text-16">
                        <input type="submit" value="Sign Up" class="col-3 py-2 px-3 text-16 btn btn-light-brown">
                    </form>
                </div>

                <div class="font-weight-300 text-gray text-16 text-decoration-none py-3">
                    Subscribe newsletter to get updates

                </div>
            </div>
        </div>
        <div class="container border-top border-gray py-4 text-center text-gray font-weight-400">
            Copyright ©2020 All rights reserved
        </div>

    </footer>

    <div id="modal_form" class="modal_form_wrapper d-flex justify-content-center align-items-center h-100 position-fixed fixed-top col-12">
        <form action="functions.php" method="POST" name="order-form" accepted-charset="utf-8" class="col-6 col-xl-9 col-sm-11 bg-white p-5 d-flex flex-wrap position-relative">

            <div id="modal_close" class="modal_close position-absolute"></div>

            <div class="text-22 font-weight-400 text-center pb-4 col-12 ">Make an Apointment</div>

            <div class="col-6 col-sm-12 pb-4 px-2">
                <input type="text" class="col-12 p-3" placeholder="Name">
            </div>
            <div class="col-6 col-sm-12 pb-4 px-2">
                <input type="text" class="col-12 p-3"placeholder="Surname">
            </div>
            <div class="col-6 col-sm-12 pb-4 px-2">
                <input type="email" class="col-12 p-3"placeholder="Email">
            </div>
            <div class="col-6 col-sm-12 pb-4 px-2">
                <input type="tel" class="col-12 p-3"placeholder="Phone number">
            </div>
            <div class="col-12 pb-4 px-2">
                <textarea class="col-12 p-3" rows="8" placeholder="Message"></textarea>
            </div>

            <div class="col-12 d-flex px-2 pb-4"><button type="submit" class="btn btn-brown px-5 py-3 col-12">Submit</button></div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
