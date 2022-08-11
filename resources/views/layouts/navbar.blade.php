<?php
    use Illuminate\Support\Facades\Route;
?>
<header class="main-header header-style1">
    <div class="header-upper-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-container clearfix">
                        <div class="logo-box-style1 float-left">
                            <a href="{{route('accueil')}}">
                                <img src="{{asset('images/resources/logoitransmission.png')}}" alt="i-transmission" href="/">
                            </a>
                        </div>
                        <div class="main-menu-box float-right">
                            <nav class="main-menu clearfix">

                                <div class="navbar-header clearfix">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">

                                    <ul class="navigation clearfix">

                                        <li class="{{(Route::currentRouteName()=='accueil')  ?  'current' : ''}}">
                                            <a href="/">
                                                Accueil
                                            </a>
                                        </li>

                                        <li class="{{(Route::currentRouteName()=='about')  ?  'current' : ''}} dropdown">
                                            <a href="{{route('about')}}">Sociéte</a>
                                        </li>

                                        <li class="{{(Route::currentRouteName()=='galerie')  ?  'current' : ''}} dropdown">
                                            <a href="{{route('galerie')}}">Galerie</a>
                                        </li>

                                        <li class="{{(Route::currentRouteName()=='services')  ?  'current' : ''}} dropdown">
                                            <a  href="{{route('services')}}">Services</a>
                                           <!--  <ul>
                                                <li><a class="{{request () ->is('services') ? 'is-current' : '' }}" href="/services">Services</a></li>
                                                <li><a href="ser-concept-designs.html">Distribution et vente de pièces de transmissions industrielles et automobiles</a></li>
                                                <li><a href="ser-project-designs.html">Quincaillérie générale</a></li>
                                                <li><a href="ser-make-overs.html">Négoce</a></li>
                                                <li><a href="ser-consulting.html">Formations et Consulting</a></li>
                                                <li><a href="ser-glass-wrought.html">Service après vente (SAP)</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li class="dropdown"><a href="project.html">Projects</a>
                                            <ul>
                                                <li><a href="project.html">Classic View 01</a></li>
                                                <li><a href="project-v2.html">Classic View 02</a></li>
                                                <li><a href="project-v3.html">Modern View 01</a></li>
                                                <li><a href="project-v4.html">Modern View 02</a></li>
                                                <li><a href="project-v5.html">Fullwidth 01</a></li>
                                                <li><a href="project-v6.html">Fulldwidth 02</a></li>
                                                <li><a href="project-single.html">Projects Single</a></li>
                                            </ul>
                                        </li> -->
                                        <!--  <li class="dropdown"><a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid View</a></li>
                                                <li><a href="blog-v2.html">Blog With Sidebar</a></li>
                                                <li><a href="blog-single.html">Blog Single Post</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="{{(Route::currentRouteName()=='produits')  ?  'current' : ''}} dropdown">
                                            <a href="{{route('produits')}}">Produits</a>
                                        </li>

                                        <li class="{{(Route::currentRouteName()=='contact')  ?  'current' : ''}} dropdown">
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>

                            <div class="mainmenu-right">
                                <div class="outer-search-box">
                                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                    <ul class="search-box">
                                        <li>
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="search" placeholder="Recherche" required>
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-lower-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <ul class="header-contact-info float-left">
                            <li>
                                <div class="single-item">
                                    <div class="icon">
                                        <span class="icon-maps-and-location"></span>
                                    </div>
                                    <div class="text">
                                        <h3>- Abidjan / Treichville </h3>
                                        <p>Rue des Brasseurs, Zone 3</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-item">
                                    <div class="icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="text">
                                        <h3>(+225) 07 49 77 83 43/01 02 72 32 92 </h3>
                                        <p>Lun - Vendredi: 8.00 to 17.00</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-item">
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <div class="text">
                                        <h3>info@i-transmissions.com</h3>
                                        <p>contact@i-transmissions.com</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="header-social-links-style1 float-right">
                            <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                            </li>
                            <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
