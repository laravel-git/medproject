<!doctype html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-5">
                    <ul class="social list-unstyled">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-7 text-right">
                    <p class="mb-0">
                        <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Uchrashuvlar</a></p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1><i class="fa fa-medkit"></i></h1>
            <a class="navbar-brand ml-2" href="{{route('med.index')}}">VODIY SHIFO DENT<span>+</span>  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-3">


                    <li class="nav-item">
                        <h4><a class="nav-link text-black active " href="{{route('med.index')}}">Bosh Sahifa</a></h4>
                    </li>

                    <li class="nav-item">
                        <h4><a class="nav-link" style="color:#1d2124" href="{{route('med.doctors')}}">Shifokorlar</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link " style="color:#1d2124"  href="{{route('med.services')}}">Xizmatlar</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" style="color:#1d2124"  href="{{route('med.news')}}">Yangiliklar</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" style="color:#1d2124"  href="{{route('med.about')}}">Biz haqimizda</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" style="color:#1d2124"  href="{{route('med.contact')}}">Kontakt</a></h4>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<section class="home-slider inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-2.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 element-animate">
                    <h1>A'loqa</h1>
                    <p>Biz bilan a'loqada qoling!</p>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- END slider -->


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 element-animate">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="fname">Ismingiz</label>
                            <input type="text" class="form-control form-control-lg" id="fname">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Familiyangiz</label>
                            <input type="text" class="form-control form-control-lg" id="lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Xat yuborish</label>
                            <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Yubormoq" class="btn btn-primary btn-lg btn-block">
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 element-animate">

                <h5 class="text-uppercase mb-3">Manzil</h5>
                <p class="mb-5">Farg'ona shahar, <br> Ma'rifat ko'cha <br>uy-42, kv-26</p>

                <h5 class="text-uppercase mb-3">Email </h5>
                <p class="mb-5"><a href="mailto:info@yourdomain.com">zoirjon@yahoo.com</a> <br> <a href="mailto:customer@yourdomain.com">customer@yourdomain.com</a></p>

                <h5 class="text-uppercase mb-3">Call Us</h5>
                <p class="mb-5">Phone: (+1) 435 3533 <br> Mobile: (+1) 435 3533 <br> Fax: (+1) 435 3534</p>


            </div>
        </div>
    </div>
</section>



<a href="#" class="cta-link element-animate" data-aniamte-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
    <span class="sub-heading">Tashrifga tayyormisiz?</span>
    <span class="heading">Uchrashuvni tanlang</span>
</a>
<!-- END cta-link -->

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5 element-animate">
            <div class="col-md-3 mb-5">
                <h3>Xizmatlar</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Shifokor topish</a></li>
                    <li><a href="#">Tezkor yordam</a></li>
                    <li><a href="#">Favqulodda yordam</a></li>
                    <li><a href="#">Uslublar va davolash</a></li>
                    <li><a href="#">Onlayn xizmatar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>So'ngi yangiliklar</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Yangiliklar va Pres relizlar</a></li>
                    <li><a href="#">Sog'liqni saqlash professional yangiliklar</a></li>
                    <li><a href="#">Voqealar va konferensiyalar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Biz haqimizda</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Shifoxona haqida</a></li>
                    <li><a href="#">Izohlar</a></li>
                    <li><a href="#">Akkreditlar va mukofatlar</a></li>
                    <li><a href="#">Ishga qabul qilish</a></li>
                    <li><a href="#">Fikr mulohazalar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Manzil va aloqa</h3>
                <p class="mb-5">Farg'ona shahar, ko'cha MA'RIFAT, uy-42, kv-26</p>

                <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
                    <p class="mb-5"><a href="mailto:info@yourdomain.com">zoirjon@yahoo.com</a></p>

                    <h4 class="text-uppercase mb-3 h6 text-white">Telefon</h5>
                        <p>+99895 401 19 49</p>

            </div>
        </div>

        <div class="row pt-md-3 element-animate">
            <div class="col-md-12">
                <hr class="border-t">
            </div>
            <div class="col-md-6 col-sm-12 copyright">
                <p>&copy; 2018 yil VODIY SHIFO DENT + ishlab chiqilgan <a href="https://colorlib.com/">Colorlib</a></p>
            </div>
            <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->


<!-- Modal -->
<div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAppointmentLabel">Uchrashuv</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label for="appointment_name" class="text-black">F.I.O.</label>
                        <input type="text" class="form-control" id="appointment_name">
                    </div>
                    <div class="form-group">
                        <label for="appointment_email" class="text-black">Email</label>
                        <input type="text" class="form-control" id="appointment_email">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="appointment_date" class="text-black">Sana</label>
                                <input type="text" class="form-control" id="appointment_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="appointment_time" class="text-black">Vaqt</label>
                                <input type="text" class="form-control" id="appointment_time">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="appointment_message" class="text-black">Habar</label>
                        <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>