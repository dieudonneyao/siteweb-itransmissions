@extends('layouts.base')

@section('content')

    @include('produits.banner')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">

                @include('produits.product_sidebar')

                <div class="col-lg-9">

                    @include('produits.search')

                   <!--  <div class="hero__item set-bg" data-setbg="{{asset('images/resources/banner3VF.jpg')}};">
                        <div class="hero__text">
                            <span>Transmission industrielle</span>
                            <h2>Produits de marque</h2>
                            <p style="font-size: 20px;">Désolé nous avons pas de produits pour cette catégorie de produits !</p>
                            <a href="http://127.0.0.1:8000/product-itransmission" class="primary-btn">itransmission</a>
                        </div>
                    </div> -->
                    <div class="banner">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <span class="texte">Transmission industrielle</span>
                                <h2 class="title">Produits <br />de marque</h2>
                                <p class="para">                                
                                    Désolé nous avons pas de produits pour cette catégorie de produits !
                                </p>
                                <a href="http://127.0.0.1:8000/product-itransmission" class="parcour">Autres produits</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img class="ima" src="{{asset('images/resources/cog.jpg')}}" alt="Bannière nos produits">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

@endsection
