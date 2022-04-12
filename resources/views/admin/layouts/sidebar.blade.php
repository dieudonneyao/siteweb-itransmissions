<?php
    use Illuminate\Support\Facades\Route;
?>

@hasrole('super_admin')
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class=" {{(Route::currentRouteName()=='admin.index')  ?  'active pcoded-trigger' : ''}} ">
                <a href="{{route('admin.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Accueil</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.admin_cat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.admin_cat')}}">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.scat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.scat')}}">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Sous-Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.products')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.products')}}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Produits</span>
                </a>
            </li>


            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Commandes</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.user.index')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.user.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Utilisateurs</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
@endhasrole


@hasrole('admin')
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class=" {{(Route::currentRouteName()=='admin.index')  ?  'active pcoded-trigger' : ''}} ">
                <a href="{{route('admin.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Accueil</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.admin_cat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.admin_cat')}}">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.scat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.scat')}}">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Sous-Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.products')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.products')}}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Produits</span>
                </a>
            </li>


            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Commandes</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.user.index')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.user.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Utilisateurs</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
@endhasrole


@hasrole('utilisateur')
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class=" {{(Route::currentRouteName()=='admin.index')  ?  'active pcoded-trigger' : ''}} ">
                <a href="{{route('admin.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Accueil</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.admin_cat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.admin_cat')}}">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.scat')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.scat')}}">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Sous-Categories</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.products')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.products')}}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Produits</span>
                </a>
            </li>


            <li class="{{(Route::currentRouteName()=='admin.user.index')  ?  'active pcoded-trigger' : ''}}">
                <a href="{{route('admin.user.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Utilisateurs</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
@endhasrole
