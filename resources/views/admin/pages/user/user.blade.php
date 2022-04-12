@extends('admin.admin_app')

@section('content')

    <div class="page-wrapper">

        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            @include('admin.layouts.message')
                            <h4>Profil Utilisateur</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item"  style="float: left;">
                                <a href=""> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"  style="float: left;"><a href="">Utilisateurs</a>
                            </li>
                            <li class="breadcrumb-item"  style="float: left;"><a href="">Profil Utilisateur</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">

            <!--profile cover start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="cover-profile">
                        <div class="profile-bg-img">

                            <div class="row">
                                <div class="col-md-4">
                                    <img class="profile-bg-img img-fluid"
                                    src="{{asset('images/user_image.jpg')}}"
                                    alt="bg-img">
                                </div>
                                <div class="col-md-4">
                                    <img class="profile-bg-img img-fluid"
                                    src="{{asset('images/prod.png')}}"
                                    alt="bg-img">
                                </div>
                                <div class="col-md-4">
                                    <img class="profile-bg-img img-fluid"
                                    src="{{asset('images/prod3.png')}}"
                                    alt="bg-img">
                                </div>

                            </div>

                            <div class="card-block user-info">
                                <div class="col-md-12">
                                    <div class="media-left">
                                        <a href="#" class="profile-image">
                                            <img class="user-img img-radius"
                                                src="{{asset('admin/assets/images/user-profile/user-img.jpg')}}"
                                                alt="user-img">
                                        </a>
                                    </div>
                                    <div class="media-body row">
                                        <div class="col-lg-12">
                                            <div class="user-title">
                                                <h2>{{Auth::user()->name}}</h2>
                                                <span class="text-white">Web designer</span>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <div class="pull-right cover-btn">
                                                <button type="button"
                                                    class="btn btn-primary m-r-10 m-b-5"><i
                                                        class="icofont icofont-plus"></i>
                                                    Follow</button>
                                                <button type="button"
                                                    class="btn btn-primary"><i
                                                        class="icofont icofont-ui-messaging"></i>
                                                    Message</button>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--profile cover end-->
            <div class="row">

                <div class="col-lg-12">

                    <!-- tab header start -->
                    <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                            id="mytab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab"
                                    href="#personal" role="tab">Info Personnel</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#add"
                                    role="tab">Ajouter un utilisateur</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contacts"
                                    role="tab">Tous les utilisateurs</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- tab header end -->

                    <!-- tab content start -->
                    <div class="tab-content">

                        <!-- tab panel personal start -->
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <!-- personal card start -->
                            <div class="card">

                                @include('admin.pages.user.info_personnel')
                                <!-- end of card-block -->

                            </div>

                            <!-- personal card end-->
                        </div>
                        <!-- tab pane personal end -->

                        <!-- tab pane info start  Ajout nouveau utilisteur-->
                        <div class="tab-pane" id="add" role="tabpanel">
                            <!-- info card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Nouveau utilisateur</h5>
                                </div>

                                <form action="{{route('admin.user.store')}}" method="post">

                                    @csrf

                                    <div class="col-lg-6">

                                        <input name="full_name" class="form-control" type="text" placeholder="Nom & Prénom"> <br>

                                        <input name="name" type="text" class="form-control" placeholder="Nom utilisateur"><br>

                                        <input name="email" type="email" class="form-control" placeholder="Adresse email"><br>

                                        <input name="contact" type="text" class="form-control" placeholder="Contact"><br>

                                        <select name="genre" id="hello-single" class="form-control">
                                            <option
                                                value="">
                                                ----
                                                Genre
                                                ----
                                            </option>

                                            <option value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select><br>

                                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control select2 js-example-basic-multiple col-sm-12','multiple')) !!}<br>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" >Enregistrer</button>

                                        <!-- end of table col-lg-6 -->
                                    </div>

                                </form>

                            </div>
                            <!-- info card end -->
                        </div>
                        <!-- tab pane info end nouveau utilisteur-->


                        <!-- tab pane info start -->
                        <div class="tab-pane" id="binfo" role="tabpanel">
                            <!-- info card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">User Services</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="card b-l-success business-info services m-b-20">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">
                                                                Shivani Hero</h5>
                                                        </a>
                                                    </div>
                                                    <span
                                                        class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div
                                                        class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-edit"></i>
                                                            Edit</a>
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-ui-delete"></i>
                                                            Delete</a>
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-eye-alt"></i>
                                                            View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem
                                                                ipsum dolor sit amet,
                                                                consectet ur adipisicing
                                                                elit, sed do eiusmod temp or
                                                                incidi dunt ut labore
                                                                et.Lorem ipsum dolor sit
                                                                amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card b-l-danger business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">
                                                                Dress and Sarees</h5>
                                                        </a>
                                                    </div>
                                                    <span
                                                        class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div
                                                        class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-edit"></i>
                                                            Edit</a>
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-ui-delete"></i>
                                                            Delete</a>
                                                        <a class="dropdown-item"
                                                            href="#!"><i
                                                                class="icofont icofont-eye-alt"></i>
                                                            View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem
                                                                ipsum dolor sit amet,
                                                                consectet ur adipisicing
                                                                elit, sed do eiusmod temp or
                                                                incidi dunt ut labore
                                                                et.Lorem ipsum dolor sit
                                                                amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Profit</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="main"
                                                style="height:300px;width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info card end -->
                        </div>
                        <!-- tab pane info end -->

                        <!-- tab pane contact start -->
                        @include('admin.pages.user.alluser')

                    </div>
                    <!-- tab content end -->
                </div>
            </div>

        </div>
        <!-- Page-body end -->
    </div>

@endsection
