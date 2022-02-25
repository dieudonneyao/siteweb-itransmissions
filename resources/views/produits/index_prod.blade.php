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
                            <h2>Produits <br />de marque</h2>
                            <p>Nous avons le souci de la qualité</p>
                            <a href="#" class="primary-btn">Parcourez</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

@endsection
