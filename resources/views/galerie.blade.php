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
        <div class="container gallerie">

           @include('galerie_ajax')

        </div>
    </section>
    <!--End Main project area-->


    <script type="text/javascript">
        $(window).on('hashchange',function(){
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else{
                    getData(page);
                }
            }
        });
        $(document).ready(function(){
            $(document).on('click','.pagination a',function(event){
                event.preventDefault();
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                var url = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];
                getData(page);
            });
        });
        function getData(page) {
            // body...
            $.ajax({
                url : '?page=' + page,
                type : 'get',
                datatype : 'html',
            }).done(function(data){
                $('#gallerie').empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR,ajaxOptions,thrownError){
                alert('No response from server');
            });
        }
    </script>

@endsection
