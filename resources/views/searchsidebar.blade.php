<!--Start sidebar Wrapper-->
<div class="col-xl-3 col-lg-4 col-md-8 col-sm-12 float-left">
    <div class="shop-sidebar-wrapper">
        <!--Start single sidebar-->
        <div class="single-sidebar-box">
            <form class="search-form" action="#">
                <input placeholder="Search..." type="text">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <!--End single sidebar-->

        <!--Start single sidebar-->
        <div class="single-sidebar-box pdbtm">
            <div class="shop-sidebar-title">
                <h3>Categories</h3>
            </div>
            <ul class="categories clearfix">
                @foreach ($categories as $item)
                    <li class="@if(Route::currentRouteName()=='itransmission') active @endif"><a href="/product-itransmission/{{$item->slug}}">{{$item->libelle}} </a></li>
                @endforeach
            </ul>
        </div>
        <!--End single sidebar-->

        <!--Start single sidebar-->
        <div class="single-sidebar-box pdbtm">
            <!-- <div class="shop-sidebar-title">
                <h3>Filter by Price</h3>
            </div>
            <div class="price-ranger">
                <div id="slider-range"></div>
                <div class="ranger-min-max-block">
                    <input type="submit" value="Filter">
                    <span>Price:</span>
                    <input type="text" readonly class="min">
                    <span>-</span>
                    <input type="text" readonly class="max">
                </div>
            </div> -->
        </div>
        <!--End single sidebar-->
        <!--Start single sidebar-->
        <div class="single-sidebar-box">
            <div class="shop-sidebar-title">
                <h3>Quincaillérie</h3>
            </div>
            <ul class="products-post">
                <li>
                    <div class="img-holder">
                        <img src="{{asset('images/sidebar/popular-product-1.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><span class="icon-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h5 class="post-title"><a href="#">The Innovators</a></h5>
                        <span>$34.99</span>
                    </div>
                </li>
                <li>
                    <div class="img-holder">
                        <img src="{{asset('images/sidebar/popular-product-2.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><span class="icon-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h5 class="post-title"><a href="#">Good to Great</a></h5>
                        <span>$29.00</span>
                    </div>
                </li>
                <li>
                    <div class="img-holder">
                        <img src="{{asset('images/sidebar/popular-product-3.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><span class="icon-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h5 class="post-title"><a href="#">Built to Last</a></h5>
                        <span>$24.99</span>
                    </div>
                </li>

            </ul>
        </div>
        <!--End single sidebar-->
    </div>
</div>
<!--End Sidebar Wrapper-->
