@extends('layouts.base')

@section('content')

    @include('produits.banner')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="">
            <div class="banner">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <span class="texte">Transmission industrielle</span>
                        <h2 class="title">Produits <br />de marque</h2>
                        <p class="para">Nous avons le souci de la qualité et bénéficions d'un partenariat puissant avec plusieurs marques
                            de fabrication de pièces.
                        </p>
                        <a href="#" class="parcour">Parcourez</a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                    <img class="ima" src="images/projects/banner3VF.jpg" alt="Bannière nos produits">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @include('produits.product_sidebar')

                <div class="col-lg-9">

                    @include('produits.search')

                    <div class="hero__item set-bg" data-setbg="{{asset('images/resources/banner3VF.jpg')}};">
                        <div class="hero__text">
                            <span>Transmission industrielle</span>
                            <h2>Produits <br />de marque</h2>
                            <p>Nous avons le souci de la qualité</p>
                            <a href="#" class="btn btn-danger">Parcourez</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <span>Transmission industrielle</span>
                                <h2>Produits <br />de marque</h2>
                                <p>Nous avons le souci de la qualité</p>
                                <a href="#" class="btn btn-danger">Parcourez</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img src="images/projects/lat-pro-1.jpg" alt="Bannière nos produits">
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner2">
                        <div class="row">                       
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                        <span>Transmission industrielle</span>
                                        <h2>Produits <br />de marque</h2>
                                        <p>Nous avons le souci de la qualité</p>
                                        <a href="#" class="btn btn-danger">Parcourez</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="images/projects/lat-pro-2.jpg" alt="Bannière nos produits">
                                </div>
                            </div>
                        </div> 
                    </div>                   
                </div>
            </div>            
            <section class="categories">
                <div class="container">
                    <div class="row">
                        <div class="categories__slider owl-carousel">
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                                    <h5><a href="#">Fresh Fruit</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                                    <h5><a href="#">Dried Fruit</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                                    <h5><a href="#">Vegetables</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                                    <h5><a href="#">drink fruits</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                                    <h5><a href="#">drink fruits</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
   
    <!-- Hero Section End -->

@endsection
