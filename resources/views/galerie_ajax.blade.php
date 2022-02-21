<ul class="project-filter post-filter has-dynamic-filters-counter">
    <li data-filter=".filter-item" class="active"><span class="filter-text">Tous les produits</span></li>
    <li data-filter=".mod"><span class="filter-text">Transmissions</span></li>
    <li data-filter=".ppp"><span class="filter-text">Quincaillerie</span></li>
    <li data-filter=".trad"><span class="filter-text">Electricité</span></li>
    <li data-filter=".reta"><span class="filter-text">Divers</span></li>
    <li data-filter=".jeff"><span class="filter-text">Huiles</span></li>
</ul>

<div class="row filter-layout masonary-layout">

    <!--produits-->
    @foreach ($produits as $item)
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item ">
            <div class="single-project-style4">
                <div class="img-holder">
                    <div class="inner">
                        <img src="" alt="">
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
                            <span></span>
                            <h3><a href="jeff-single.html"></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--produits-->


    <!--transmission-->
    @foreach ($transmission as $it)
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mod ">
            <div class="single-project-style4">
                <div class="img-holder">
                    <div class="inner">
                        <img src="/uploads/shop/{{$it->image}}" alt="Awesome Image">
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
                            <span>{{$it->cats}}</span>
                            <h3><a href="jeff-single.html">Moteur</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--transmission-->

    <!--quicaillerie-->
    @foreach ($quicaillerie as $value)
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12  ppp ">
        <div class="single-project-style4">
            <div class="img-holder">
                <div class="inner">
                    <img src="/uploads/shop/{{$value->image}}" alt="Awesome Image">
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
                        <h3><a href="project-single.html">{{$value->scats}}</a></h3>
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
                    <img src="/uploads/shop/{{$key->image}}" alt="Awesome Image">
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
    @foreach ($divers as $v)
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12  reta ">
        <div class="single-project-style4">
            <div class="img-holder">
                <div class="inner">
                    <img src="/uploads/shop/{{$v->image}}" alt="Awesome Image">
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
                        <span>{{$v->categorie->libelle}}</span>
                        <h3><a href="project-single.html">Moteur</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!--divers-->

    <!--divers-->
    @foreach ($huiles as $vh)
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 jeff ">
        <div class="single-project-style4">
            <div class="img-holder">
                <div class="inner">
                    <img src="/uploads/shop/{{$vh->image}}" alt="Awesome Image">
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
                        <span>{{$vh->categorie->libelle}}</span>
                        <h3><a href="project-single.html">Moteur</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!--divers-->


</div>
<!--Start post pagination-->


{!! $produits->render() !!}

<!--End post pagination-->
