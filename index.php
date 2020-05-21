
<html>
<head>
    <?php
    require_once "functions.php";
    $workers = getWorkers(4);
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
        <nav id="navigation" class="main_nav col-9 col-xl-12 d-flex align-items-center pl-6 flex-xl-column">
            <ul class="d-flex list-style-none flex-xl-column">
                <li><a href="#" class="active">Home </a></li>
                <li><a href="#about_us">About</a></li>
                <li class="has_child">
                    <a href="#">Services</a>
                    <ul class="sub_menu">
                        <li><a href="#service"> Main Service</a></li>
                        <li><a href="allService.php"> All our services</a></li>
                    </ul>
                </li>
                <li class="has_child">
                    <a href="#">Work</a>
                    <ul class="sub_menu">
                        <li><a href="#how_we_work"> How we work</a></li>
                        <li><a href="#our_workers"> Our workers</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="btn btn-outline d-none d-xl-inline-block px-3 py-2 modal_form_trigger"
                    id="make_an_appointment">Make an Appointment
            </button>
        </nav>
        <div class="col-1  d-flex align-items-center d-xl-none">
            <button class="btn btn-outline px-3 py-2 modal_form_trigger" id="make_an_appointment">Make an Appointment
            </button>
        </div>
    </div>
</header>

<main>
    <section id="banner" class="photo d-flex justify-content-center align-items-center">
        <div class="col-5 col-md-10 text-center text-white">
            <img src="img/barbertext.png">
            <h1 class="pt-3"> Best Barber In Your Town</h1>
            <div class="text-center text-24 subtitle p-3 position-relative d-inline-block">Proffesional Care</div>
        </div>
    </section>

    <section id="about_us" class="container d-flex flex-wrap py-5">
        <div class="col-6 col-md-12 position-relative px-3">
            <img src="img/about_lft.webp">
            <div class="position-absolute fixed-center px-3 py-4 text-center bg-white">
                <i class="far fa-clock"></i>
                <div class="text-24 font-weight-900 text-brown pt-2 ">Opening Hour</div>
                <div class="text-grey text-16 pt-3">Mon-Fri (9.00-11.00)</div>
                <div class="text-grey text-16 pt-2">Sat (10.00-4.00)</div>
            </div>
        </div>
        <div class="col-6 col-md-12 px-3 pt-5 pb-3 pl-5">
            <div class="text-light-brown text-14 font-weight-400 pt-4"> About Us</div>
            <h2 class="text-42 font-weight-400 text-brown pt-4">Experianced and
                <br>
                Traditional Stylish
                <br>
                Barber Shop
            </h2>

            <p class="text-16  text-grey pt-4">
                Inspires employees and organizations to support causes they care about. We do this to bring more
                resources to the nonprofits that are changing our world.
            </p>
            <div>
                <a href="#" class="d-inline-block btn btn-brown text-16 font-weight-400 px-3 py-2 text-decoration-none">
                    Learn More</a>
            </div>
        </div>
    </section>

    <section id="service" class="py-5 position-relative">
        <img class="position-absolute service_img" src="img/photo_service.jpg" alt="our_servise">

        <div class="text-center py-5">
            <div class="text-center text-white text-24 pt-5">
                <i class="fas fa-cut"></i>
            </div>
            <h2 class="text-white text-42 font-weight-400 section_title d-flex flex-column align-items-center">
                <div class="d-inline-block pb-3">our service</div>
            </h2>
        </div>

        <div class="bg-white py-3 shadow container">
            <div class="d-flex flex-wrap">
                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/1.webp" alt="s1">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Men’s Facial
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/our_servise_2.webp" alt="s2">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Classic haircut
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $15
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/our_servise_3.webp" alt="s3">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Clean Cut
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $18
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/our_servise_4.webp" alt="s4">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Haircut and shampoo
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $20
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/our_servise_7.webp" alt="s7">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Razor Cut
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12 px-5 pb-3">
                    <div class="service_block d-flex col-12 py-3 ">
                        <div class="col-6 col-sm-8 d-flex">
                            <div class="col-3  d-flex align-items-center ">
                                <img class="circle_img " src="img/our_servise_8.webp" alt="s8">
                            </div>
                            <div class="col-9 d-flex align-items-center text-brown pl-2 font-weight-900">
                                Beard trimming
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 position-relative d-flex doted  align-items-center justify-content-end overflow-hidden">
                            <div class="d-inline-block bg-white p-1 text-18 font-weight-400 text-light-brown position-absolute ">
                                $12
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center py-5">
                <button class="col-3  d-inline-block btn btn-brown text-16 font-weight-400 px-4 py-3 modal_form_trigger">
                    Make an Apointment
                </button>
                <button class="col-3  d-inline-block btn btn-brown text-16 font-weight-400 px-4 py-3 ">
                    <a href="allService.php" class="text-decoration-none color text-black font-weight-700">More
                        services</a></button>
            </div>
        </div>
    </section>

    <section id="galery" class="container pb-5">
        <div class="our_gallery text-center py-5">
            <div class="text-center text-light-brown text-24 pt-5">
                <i class="fas fa-cut"></i>
            </div>
            <h2 class="text-brown text-42 font-weight-400 section_title d-flex flex-column align-items-center">
                <div class="d-inline-block pb-3">Our Gallery</div>
            </h2>
        </div>

        <div class=" d-flex  flex-wrap galery">
            <div class="our_gallery galery_img col-4 col-md-12 px-2">
                <img class="col-12" src="img/gallery1.webp">
            </div>
            <div class="our_gallery galery_img col-4 col-md-12 px-2">
                <img class="col-12" src="img/gallery2.webp">
            </div>
            <div class="our_gallery galery_img col-4 col-md-12 px-2">
                <img class="col-12" src="img/gallery3.webp">
            </div>
        </div>
    </section>

    <section id="how_we_work" class="bg-light-brown py-5">
        <div class="d-flex flex-wrap-reverse">
            <div class="col-6 col-md-12 d-flex justify-content-end px-3">
                <div class="col-6 col-md-12 d-flex flex-column justify-content-center text-md-center">
                    <div class="text-light-brown font-weight-400 text-14 py-3">How we Work</div>
                    <h2 class="text-brown font-weight-400 text-42 pb-3"> Watch the Video How we work?</h2>
                    <div class="pb-3 text-16">
                        <p>Inspires employees and organizations to support causes they care about.</p>
                        <p> We do this to bring more resources to the nonprofits that are
                            changing our world.</p>
                    </div>
                    <div class="pb-3 py-3">
                        <a href="#"
                           class="d-inline-block btn btn-brown font-weight-400 px-4 py-3 text-decoration-none modal_form_trigger">Book
                            Now </a>
                    </div>

                </div>
            </div>
            <div class="col-6 px-3 col-md-12 position-relative">
                <img class="col-12" src="img/video.webp">
                <div class="bg-white circle play position-absolute fixed-center">
                    <div class="arrow-right position-absolute fixed-center"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="our_workers" class="container pb-5">
        <div class=" masters text-center py-5">
            <div class="text-center text-light-brown text-24 pt-5">
                <i class="fas fa-cut"></i>
            </div>
            <h2 class=" text-brown text-42 font-weight-400 section_title d-flex flex-column align-items-center">
                <div class="d-inline-block pb-3">Our Cutter Masters</div>
            </h2>
        </div>

        <div class="d-flex flex-wrap galery workers">
            <?php
                for ($i = 0; $i < count($workers); $i++) {
                    echo ' 
                     <div class="col-3 col-md-6 col-sm-12 px-2 position-relative workers_block_wraper">
                <img class="col-12" src="'.$workers[$i]["photo"].'">
                <div class="py-4 text-center">
                    <h3 class="text-20 font-weight-400 text-brown pb-1"> '.$workers[$i]["name"].'</h3>
                    <div class="text-16 text-gray">'.$workers[$i]["specialization"].'</div>
                </div>
                <div class="workers_socials position-absolute d-flex text-white text-24">
                    <a href="#" class="fas fa-envelope px-2 text-white text-decoration-none"></a>
                    <a href="#" class="fab fa-twitter px-2 text-white text-decoration-none"></a>
                    <a href="#" class="fab fa-instagram px-2 text-white text-decoration-none"></a>
                </div>
            </div>
                        
                ';
                }
            ?>
        </div>

    </section>

    <section class="bg_bottom_section">
        <div class="container d-flex justify-content-end justify-content-md-center">
            <div class="col-5 col-md-9 col-sm-12 py-5 px-4 bg-honey">
                <h2 class=" pl-5 text-42 font-weight-400 pb-3 text-white">
                    How to Find Us
                </h2>
                <div class="pl-5 pb-3">
                    <div class="bg-white divider"></div>
                </div>
                <ul class="list-style-none contacts_list pl-5">
                    <li class="address  pl-5 position-relative">
                        <div class="text-16 font-weight-400 pb-2 text-18"> Location</div>
                        <a href="#" class="d-block text-white  text-decoration-none pb-3">200, A-block, Green road,
                            USA</a>
                    </li>
                    <li class="call pl-5 position-relative">
                        <div class="text-16 font-weight-400 pb-2 text-18"> Call Us</div>
                        <a href="tel:+10 378 478 2789" class="text-decoration-none text-white d-block pb-3">+10 378 478
                            2789</a>
                    </li>
                    <li class="mail  pl-5 position-relative">
                        <div class="text-16 font-weight-400 pb-2 text-18 "> Mail Us</div>
                        <a href="mailto:contact@barbershop.com" class=" text-decoration-none text-white d-block pb-3">200,
                            contact@barbershop.com</a>
                    </li>
                </ul>

                <div class="py-3 pl-4 ">
                    <button class="btn btn-outline px-3 py-2 modal_form_trigger" id="make_an_appointment">Make an
                        Appointment
                    </button>
                </div>

            </div>
        </div>
    </section>

</main>

<footer id="contact" class="bg-brown">
    <div class="container d-flex flex-wrap pt-5">
        <div class="col-3 col-md-6 col-sm-12 pb-5 px-3 text-sm-center">
            <h3 class="text-white text-22 font-weight-400 py-4">Join With Us</h3>
            <a href="#" class="d-block font-weight-500 text-gray text-16 pb-2 modal_form_trigger">Make Appointment</a>
            <a href="tel:+10 378 478 2789" class="d-block font-weight-500 text-gray text-16 pb-2">+10 378 478 2789</a>
        </div>
        <div class="col-3 col-md-6 col-sm-12 pb-5 px-3 text-sm-center">
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
        <div class="col-2 col-md-5 col-sm-12 pb-5 px-3 text-sm-center">
            <h3 class="text-white text-22 font-weight-400 py-4">Navigation</h3>
            <ul class="list-style-none">
                <li>
                    <a href="#heder" class="d-inline-block font-weight-500 text-gray text-16 py-2">Home</a>
                </li>
                <li>
                    <a href="#" class="d-inline-block font-weight-500 text-gray text-16 py-2">Rooms</a>
                </li>
                <li>
                    <a href="#about_us" class="d-inline-block font-weight-500 text-gray text-16 py-2">About</a>
                </li>
                <li>
                    <a href="#" class="d-inline-block font-weight-500 text-gray text-16 py-2">News</a>
                </li>
            </ul>
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
        Copyright ©2019 All rights reserved
    </div>

</footer>

<div id="modal_form"
     class="modal_form_wrapper d-flex justify-content-center align-items-center h-100 position-fixed fixed-top col-12">
    <form action="functions.php" method="POST" name="order-form" accepted-charset="utf-8"
          class="col-6 col-xl-9 col-sm-11 bg-white p-5 d-flex flex-wrap position-relative">

        <div id="modal_close" class="modal_close position-absolute"></div>

        <div class="text-22 font-weight-400 text-center pb-4 col-12 ">Make an Apointment</div>

        <div class="col-6 col-sm-12 pb-4 px-2">
            <input type="text" name="name" class=" col-12 p-3" placeholder="Name">
        </div>
        <div class="col-6 col-sm-12 pb-4 px-2">
            <input type="text" name="surname" class="col-12 p-3" placeholder="Surname">
        </div>
        <div class="col-6 col-sm-12 pb-4 px-2">
            <input type="email" name="email" class="col-12 p-3" placeholder="Email">
        </div>
        <div class="col-6 col-sm-12 pb-4 px-2">
            <input type="tel" name="phone" class="col-12 p-3" placeholder="Phone number">
        </div>
        <div class="col-12 pb-4 px-2">
            <textarea class="col-12 p-3" name="message" rows="8" placeholder="Message"></textarea>
        </div>

        <div class="col-12 d-flex px-2 pb-4">
            <button type="submit" class="btn btn-brown px-5 py-3 col-12">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
