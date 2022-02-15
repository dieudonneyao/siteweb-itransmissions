@extends('layouts.base')

@section('content')
<section class="breadcrumb-area style2" style="background-image: url(images/resources/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        
                        <h1>Nos Produits</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Nos produits</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--End breadcrumb area-->

        <!-- Start Top Bar style1 -->
 <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid padding_dd">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>REPRESENTANT OFFICIEL</h1>
                        <p>DE LA GRANDE MARQUE</p>
                        <a href="#">Accéder au site</a> <a href="#">get a qoute</a>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure><img src="images/img2.png"></figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">

              <div class="container-fluid padding_dd">
                <div class="carousel-caption">

                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Search your Favorite Course here</h1>
                        <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                        <a href="#">Read more</a><a href="#">get a qoute</a>
                      </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure><img src="images/img2.png"></figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="carousel-item">

              <div class="container-fluid padding_dd">
                <div class="carousel-caption ">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Search your Favorite Course here</h1>
                        <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                        <a href="#">Read more</a> <a href="#">get a qoute</a>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure><img src="images/img2.png"></figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>

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
