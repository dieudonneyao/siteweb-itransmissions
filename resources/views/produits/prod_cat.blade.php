@extends('layouts.base')

@section('content')

    @include('produits.banner')
    <br><br>

    <!-- Hero Section Begin -->
    <section class="hero">

        <div class="container">
            <div class="row">

                @include('produits.product_sidebar')

                <div class="col-lg-9">

                    @include('produits.search')

                    <div class="row">
                        

                        @if($produits->isEmpty())
                            @include('produits.page_vide')
                        @else
                            @foreach ($produits as $item)
                                <div class="col-xl-4  col-lg-6 col-md-12 col-sm-12">
                                    <div class="single-product-item text-center">
                                        <div class="img-holder">
                                            <img src="/uploads/shop/{{$item->image}}" alt="Awesome Product Image">
                                        </div>
                                        <div class="title-holder text-center">
                                            <div class="static-content">
                                                <h3 class="title text-center"><a href="">{{$item->cats}}</a></h3>
                                                <span>{{$item->scats}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        
                        <div class="col-md-12 col-sm-12">
                            <!-- {!! $produits->render() !!} -->
                            {{ $produits->links('partials.my-paginate') }}
                        </div>
                                               
                    </div>



                </div>

            </div>



        </div>


    </section>
    <!-- Hero Section End -->


    <!--Start Shop area-->
    {{-- <section id="shop-area" class="main-shop-area">
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
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href=""></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End post pagination-->

                    </div>
                </div>


            </div>
        </div>
    </section> --}}


@endsection
