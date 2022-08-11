@extends('layouts.base')
@section('title', 'Contact')
@section('content')

<!--Start breadcrumb area-->

@include('layouts.alert_message')

@include('sweetalert::alert')


<!--End breadcrumb area-->
<!--Start appointment Area-->
    <section class="appointment-area" style="background-image:url(images/resources/appointment-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="map-content-box">
                        <div class="sec-title">
                            <p>DÉTAILS DU CONTACT</p>
                            <div class="title">COMMENT POUVONS-NOUS <span>VOUS AIDER ?</span></div>
                        </div>
                        <div class="inner paroller">
                            <img src="images/resources/map.png" alt="Map">
                            <div class="overlay">
                                <div class="single-location-box one wow zoomIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="location-info">
                                        <h3>Brooklyn</h3>
                                        <p>P. B: 222. Mid Corner Street<br> Brooklyn - 11223.<br> +224 620 63 09 00<br> example@example.com</p>
                                    </div>
                                </div>
                                <div class="single-location-box two wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="location-info">
                                        <h3>Brooklyn</h3>
                                        <p>P. B: 222. Mid Corner Street<br> Brooklyn - 11223.<br> +224 620 63 09 00<br> example@example.com</p>
                                    </div>
                                </div>
                                <div class="single-location-box three wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="location-info">
                                        <h3>Brooklyn</h3>
                                        <p>P. B: 222. Mid Corner Street<br> Brooklyn - 11223.<br> +224 620 63 09 00<br> example@example.com</p>
                                    </div>
                                </div>
                                <div class="single-location-box four wow zoomIn" data-wow-delay="700ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="location-info">
                                        <h3>Brooklyn</h3>
                                        <p>P. B: 222. Mid Corner Street<br> Brooklyn - 11223.<br> +224 620 63 09 00<br> example@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="appointment-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">

                        @include('layouts.alert_message')

                        <div class="title-box">
                            <h2>Prendre un rendez-vous</h2>
                            <span>Laissez vos informations ici et obtenez une réponse de notre expert dans les 24 heures, n'hésitez pas à demander.</span>
                        </div>

                        <div class="appointment">

                            <form class="appointment-form" id='myForm' action="{{route('send_contact')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="nom" placeholder="Nom utilisateur" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="email" name="email" placeholder="Adresse email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <textarea name="description" placeholder="votre message ici" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <button class="btn-one" type="submit" id='jeff'>Soumettre<span class="flaticon-next"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
 <!--Start Brand area-->
 <section class="brand-area">
            <div class="container">
                <div class="sec-title">
                    <p>Nos Clients</p>
                    <div class="title">Ils nous font <span>confiance</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="brand-items-carousel owl-carousel owl-theme">
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>FRANZETTI CI</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>NESTLE</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>OLAM</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>PALMCI</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SACO</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SAPH</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->

                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SECO</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SAPH</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/7.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SECO</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/8.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SICOSA</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/9.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SODECI</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/10.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>SUCRIVOIRE</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand area-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
        $(document).ready(function(){
                $(".btn-one").click(function(){
                    $("#myForm").trigger("reset");
                });
            });
    </script>

@endsection
