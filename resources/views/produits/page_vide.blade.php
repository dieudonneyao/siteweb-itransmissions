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

                    <div class="hero__item set-bg" data-setbg="{{asset('images/resources/banner3VF.jpg')}};">
                        <div class="hero__text">
                            <span>Transmission industrielle</span>
                            <h2>Produits de marque</h2>
                            <p style="font-size: 20px;">Désolé nous avons pas de produits pour cette catégorie de produits !</p>
                            <a href="http://127.0.0.1:8000/product-itransmission" class="primary-btn">itransmission</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

@endsection
