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

                    <div class="row" id='search'>

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
                                                <h3 class="title text-center"><a href="shop-single.html">{{$item->cats}}</a></h3>
                                                <span>{{$item->scats}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="col-md-12 col-sm-12">
                            {!! $produits->render() !!}
                        </div>


                    </div>



                </div>

            </div>



        </div>


    </section>
    <!-- Hero Section End -->

      <!-- Ajax code -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <script type="application/javascript">
        $(document).ready(function(){

            $('#search_cat').on('keyup', function(){

                var text = $('#search_cat').val();

                $.ajax({

                    type:"GET",
                    url: '127.0.0.1:8000/result_search',
                    data: {text: $('#search_cat').val()},
                    success: function(data) {

                        console.log(data);

                    }

                });

            });

        });
    </script>





@endsection
