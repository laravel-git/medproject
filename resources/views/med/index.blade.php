<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #5AC8D8">
    <h1 class="mr-3"style="font-size: 80px" ><i class="fa fa-medkit"></i></h1>
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
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
                @guest
                    <li class="nav-item" style="margin-left:150px">
                        <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Kirish') }}</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px">
                        <a class="nav-link btn btn-primary" href="{{ route('register') }}">{{ __('Registratsiya') }}</a>
                    </li>

                @else
                    <li class="nav-item dropdown" style="margin-left:100px">
                        @cannot('admin-login')
                            <b style="color: #6f42c1">{{ Auth::user()->name }}</b> <span class="caret"></span>
                        @endcannot
                            <a class="btn btn-success" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Chiqish') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </li>
                @endguest
                @can('admin-login')
                    <li class="nav-item ml-5">
                        <a class="nav-link btn btn-success" style="color:#1d2124"  href="{{route('admin.index')}}">Admin Uchun</a>
                @endcan
            </ul>
        </div>
    </div>
</nav>


<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('img/awq.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 element-animate">
                    <h1 style="color:mediumblue;">Biz sizning chiroyli tabassumingizni istaymiz! </h1>
                    <p style="color: #6f42c1;">Tabassum qiling sizning tabassumingiz dunyoni go'zal qiladi.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 element-animate">
                    <h1 style="color:blue;">Siz haqingizda g'amxo'rlik qilamiz</h1>
                    <p style="color:#6f42c1;">Bizni tanlaganingiz uchun sizdan minnatdormiz! Tanlovda adashmadingiz...</p>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- END slider -->


<section class="container home-feature mb-5">
    <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
            <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
                <span class="icon flaticon-hospital-bed"></span>
                <h2>Kasallik xizmatlari</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
            <a href="#" class="btn-more">Batafsil</a>
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
            <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
                <span class="icon flaticon-first-aid-kit"></span>
                <h2>Tibbiy xizmat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
            <a href="#" class="btn-more">Batafsil</a>
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
            <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
                <span class="icon flaticon-hospital"></span>
                <h2>Xususiyatlar</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
            <a href="#" class="btn-more">Batafsil</a>
        </div>
    </div>
</section>
<!-- END section -->

<section class="section stretch-section">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center mb-5">
                <h2 class="text-uppercase heading border-bottom mb-4">Nima uchun bizni tanlashadi?</h2>
                <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-md-6 stretch-left-1 element-animate" data-animate-effect="fadeInLeft">
                <a href="#" class="video"><img src="img/img_1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-6 stretch-left-1-offset pl-md-5 pl-0 element-animate" data-animate-effect="fadeInLeft">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="media d-block media-feature text-center">
                            <span class="icon flaticon-hospital"></span>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Xususiyatlar</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="media d-block media-feature text-center">
                            <span class="icon flaticon-first-aid-kit"></span>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Tibbiy xizmat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="media d-block media-feature text-center">
                            <span class="icon flaticon-hospital-bed"></span>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Kasallik xizmatlari</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="media d-block media-feature text-center">
                            <span class="icon flaticon-doctor"></span>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Mutaxassis shifokorlar</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="section custom-tabs">
    <div class="container">
        <div class="row">

            <div class="col-md-4 border-right element-animate">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span>Xususiyatlar</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span> Tibbiy xizmat</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Kasallik xizmatlari</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Mutaxassis shifokorlar</a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 element-animate">

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <span class="icon flaticon-hospital"></span>
                        <h2 class="text-primary">Xususiyatlar</h2>
                        <p class="lead">Bu shifoxonada barcha grupadagi</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                        <p><a href="#" class="btn btn-primary">Batafsil</a></p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <span class="icon flaticon-first-aid-kit"></span>
                        <h2 class="text-primary">Tibbiy xizmat</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                        <p><a href="#" class="btn btn-primary">Batafsil</a></p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <span class="icon flaticon-hospital-bed"></span>
                        <h2 class="text-primary">Kasallik xizmatlari</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                        <p><a href="#" class="btn btn-primary">Batafsil</a></p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <span class="icon flaticon-doctor"></span>
                        <h2 class="text-primary">Mutaxassis shifokorlar</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                        <p><a href="#" class="btn btn-primary">Batafsil</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center mb-5">
                <h2 class="text-uppercase heading border-bottom mb-4">Tajribali Shifokorlar</h2>
                <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
        </div>
        <div class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel">
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Carl Smith</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Janice Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Jean Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Jessica Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Carl Smith</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Janice Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Jean Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-center">
                        <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Dr. Jessica Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END slider -->
        </div>
    </div>
</section>
<!-- END section -->

<section class="cover_1" style="background-image: url(img/bg_1.jpg);">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-10">
                <h2 class="heading element-animate">Olingan tajribalar</h2>
                <p class="sub-heading element-animate mb-5">Biz sizni o'ylab, sizning sog'iligingiz yo'lida juda ko'p harakat qilib, kelgan tajribali doktordan juda ham ko'p tajribalar o'tkazdik!</p>
                <p class="element-animate"><a href="#" class="btn btn-primary btn-lg">Aloqada bo'ling</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center mb-5">
                <h2 class="text-uppercase heading border-bottom mb-4">Yangiliklar va tadbirlar</h2>
                <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
        </div>
        <div class="row element-animate">
            <div class="major-caousel js-carousel-2 owl-carousel">
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Read more</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 8</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 2</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 5</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_4.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 7</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 1</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 4</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 12</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_4.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="clearfix">
                                <a href="#" class="float-left">Batafsil</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 14</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END slider -->
        </div>
    </div>
</section>
<!-- END section -->

<a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
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
                    <li><a href="#">Onlayn xizmatlar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Biz haqimizda</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Shifoxona haqida</a></li>
                    <li><a href="#">Izohlar</a></li>
                    <li><a href="#">Akkreditlar va mukofatlar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Biz haqimizda</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Shifoxona haqida</a></li>
                    <li><a href="#">Izohlar</a></li>
                    <li><a href="#">Akkreditsiyalar va mukofatlar</a></li>
                    <li><a href="#">Ishga qabul qilish</a></li>
                    <li><a href="#">Fikr mulohazalar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Manzil va aloqa</h3>
                <p class="mb-5">Farg'ona shahar, ko'cha MA'RIFAT, uy-42, kv-26</p>

                <h4 class="text-uppercase mb-3 h6 text-white">Email</h4>
                    <p class="mb-5"><a href="mailto:info@yourdomain.com">zoirjon@yahoo.com</a></p>

                    <h4 class="text-uppercase mb-3 h6 text-white">Telefon</h4>
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
                        <label for="appointment_name" class="text-black">F.I.O</label>
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

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
