@extends('layouts.base')

@section('content')

<!--Start breadcrumb area-->

@include('layouts.alert_message')

@include('sweetalert::alert')




<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Des besoins ou questions ?<br> Notre Contact</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Accueil</a></li>
                            <li class="active">contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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


    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
        $(document).ready(function(){
                $(".btn-one").click(function(){
                    $("#myForm").trigger("reset");
                });
            });
    </script>

@endsection
