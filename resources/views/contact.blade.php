@extends('layouts.base')
@section('content')
<!--Start breadcrumb area-->
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
                            <p>Contact Details</p>
                            <div class="title">How Can We <span>Help You?</span></div>
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
                        <div class="title-box">
                            <h2>Make Appointment</h2>
                            <span>Leave your information here and get reply from our expert in 24 hours, don’t hesitate to ask.</span>
                        </div>
                        <div class="appointment">
                            <form class="appointment-form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Interested In</option>
                                            <option>Concept Designs</option>
                                            <option>Project Designs</option>
                                            <option>Make Overs</option>
                                            <option>Consulting</option>
                                            <option>Glass & Wrought</option>
                                            <option>Space Planning</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <button class="btn-one" type="submit">Submit Here<span class="flaticon-next"></span></button>
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
<!--End appointment Area-->
@endsection