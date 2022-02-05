@extends('layouts.base')

@section('content')

        @include('prod')

        <!--Start Shop area-->
        <section id="shop-area" class="main-shop-area">
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

                            <div class="row">

                                @foreach ($produits as $item)

                                    <!--Start single product item-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-product-item text-center">

                                            <div class="img-holder">
                                                <img src="{{ asset('uploads/shop/'.$item->image) }}" alt="Awesome Product Image">
                                            </div>

                                            <div class="title-holder text-center">
                                                <div class="static-content">

                                                    <h3 class="title text-center">
                                                        <a href="">{{\Illuminate\Support\Str::limit($item->cats,13)}}</a> {{\Illuminate\Support\Str::limit($item->libelle,8)}}</a>
                                                    </h3>

                                                    <span>{{$item->scats}}</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                @endforeach

                            </div>

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

                    @include('searchsidebar')

                </div>
            </div>
        </section>

        <!--End Shop area-->
@endsection
