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


    <!--Start Shop area-->
  {{--   <section id="shop-area" class="main-shop-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 float-right">

                    <div class="shop-content">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="showing-result-shorting">
                                    <!-- <div class="shorting">
                                        <select class="selectmenu">
                                            <option selected="selected">Default Sorting</option>
                                            <option>Default Sorting one</option>
                                            <option>Default Sorting Two</option>
                                            <option>Default Sorting Three</option>
                                        </select>
                                    </div> -->
                                    <div class="showing">
                                        <p>Pages 1-9 de 35 resultats</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row"></div>

                        <!--Start post pagination-->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="post-pagination text-center">
                                    <!--php echo $produits->links(); ?>-->
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End post pagination-->

                    </div>
                </div>

                <!--include('searchsidebar')-->

            </div>
        </div>
    </section> --}}
    <!--End Shop area-->

@endsection
