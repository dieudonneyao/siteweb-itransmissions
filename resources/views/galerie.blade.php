@extends('layouts.base')

@section('content')
    <!--Start breadcrumb area-->

    <section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.pngB  );">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Une large gamme de produits</span>
                            <h1>Notre galerie</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="index-2.html"></a>Accueil</li>
                                <li class="active"><a href="project.html">Galerie</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

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
