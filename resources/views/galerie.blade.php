@extends('layouts.base')

@section('content')
<section class="breadcrumb-area style2" style="background-image: url(images/resources/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        
                        <h1>Notre Galerie</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Galerie</li>
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


    <!--Start Main project area-->
    <section class="main-project-area">
        <div class="container">
            <ul class="project-filter post-filter has-dynamic-filters-counter">
                <li data-filter=".filter-item" class="active"><span class="filter-text">Tous les produits</span></li>
                <li data-filter=".mod"><span class="filter-text">Transmissions</span></li>
                <li data-filter=".contem"><span class="filter-text">Quincaillerie</span></li>
                <li data-filter=".trad"><span class="filter-text">Electricité</span></li>
                <li data-filter=".ret"><span class="filter-text">Divers</span></li>
            </ul>

            <div class="row filter-layout masonary-layout">

                <!--produits--->
                @foreach ($produits as $item)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="images/projects/v1-1.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{$item->cats}}</span>
                                        <h3><a href="project-single.html">{{$item->scats}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--produits-->

                <!--transmission-->
                @foreach ($transmission as $item)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mod ">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="images/projects/v1-2.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{$item->categorie->libelle}}</span>
                                        <h3><a href="project-single.html">Moteur</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--transmission-->

                <!--quicaillerie-->
                @foreach ($quicaillerie as $value)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 contem ">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="images/projects/v1-2.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{$value->categorie->libelle}}</span>
                                        <h3><a href="project-single.html">Moteur</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--quicaillerie-->

                <!--electricite-->
                @foreach ($electricite as $key)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 trad ">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="images/projects/v1-2.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{$key->categorie->libelle}}</span>
                                        <h3><a href="project-single.html">Moteur</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--electricite-->

                <!--divers-->
                @foreach ($divers as $items)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 ret ">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="images/projects/v1-2.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{$items->categorie->libelle}}</span>{{$items->s_categorie->libelle}}
                                        <h3><a href="project-single.html">Moteur</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--divers-->

            </div>
        </div>
    </section>
    <!--End Main project area-->
@endsection
