@extends('admin.admin_app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card  update-card" style="background-color: #404e67">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">{{$cat}}</h4>
                                <h6 class="text-white m-b-0">Categories</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-1" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    {{-- bg-c-yellow<div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                    </div> bg-c-green--}}
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card  update-card" style="background-color: #404e67">
                    <a href="{{route('admin_cat')}}">
                        <div class="card-block">
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <h4 class="text-white">{{$s_cat}}</h4>
                                    <h6 class="text-white m-b-0">Sous-Categories</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <canvas id="update-chart-2" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                    </div> bg-c-pink--}}
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card  update-card" style="background-color: #404e67">
                    <a href="{{route('admin_cat')}}">
                        <div class="card-block">
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <h4 class="text-white">{{$prod}}</h4>
                                    <h6 class="text-white m-b-0">Produits</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <canvas id="update-chart-3" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                    </div> bg-c-lite-green--}}
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card  update-card" style="background-color: #404e67">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">500</h4>
                                <h6 class="text-white m-b-0">Commandes</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-4" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-xl-9 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sales Analytics</h5>
                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-trash-2 close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div id="sales-analytics" style="height: 265px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12">
                <div class="card user-card2">
                    <div class="card-block text-center">
                        <h6 class="m-b-15">Project Risk</h6>
                        <div class="risk-rate">
                            <span><b>5</b></span>
                        </div>
                        <h6 class="m-b-10 m-t-10">Balanced</h6>
                        <a href="#!" class="text-c-yellow b-b-warning">Change Your Risk</a>
                        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                            <div class="col m-t-15 b-r-default">
                                <h6 class="text-muted">Nr</h6>
                                <h6>AWS 2455</h6>
                            </div>
                            <div class="col m-t-15">
                                <h6 class="text-muted">Created</h6>
                                <h6>30th Sep</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning btn-block p-t-15 p-b-15">Download Overall Report</button>
                </div>
            </div>

            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Application Sales</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-trash-2 close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="chk-option">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task">
                                                        <input type="checkbox" value="" />
                                                        <span class="cr">
                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            Application
                                        </th>
                                        <th>Sales</th>
                                        <th>Change</th>
                                        <th>Avg Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task">
                                                        <input type="checkbox" value="" />
                                                        <span class="cr">
                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <h6>Able Pro</h6>
                                                <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                            </div>
                                        </td>
                                        <td>16,300</td>
                                        <td><canvas id="app-sale1" height="50" width="100"></canvas></td>
                                        <td>$53</td>
                                        <td class="text-c-blue">$15,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task">
                                                        <input type="checkbox" value="" />
                                                        <span class="cr">
                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <h6>Photoshop</h6>
                                                <p class="text-muted m-b-0">Design Software</p>
                                            </div>
                                        </td>
                                        <td>26,421</td>
                                        <td><canvas id="app-sale2" height="50" width="100"></canvas></td>
                                        <td>$35</td>
                                        <td class="text-c-blue">$18,785</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task">
                                                        <input type="checkbox" value="" />
                                                        <span class="cr">
                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <h6>Guruable</h6>
                                                <p class="text-muted m-b-0">Best Admin Template</p>
                                            </div>
                                        </td>
                                        <td>8,265</td>
                                        <td><canvas id="app-sale3" height="50" width="100"></canvas></td>
                                        <td>$98</td>
                                        <td class="text-c-blue">$9,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task">
                                                        <input type="checkbox" value="" />
                                                        <span class="cr">
                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <h6>Flatable</h6>
                                                <p class="text-muted m-b-0">Admin App</p>
                                            </div>
                                        </td>
                                        <td>10,652</td>
                                        <td><canvas id="app-sale4" height="50" width="100"></canvas></td>
                                        <td>$20</td>
                                        <td class="text-c-blue">$7,856</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card user-activity-card">
                    <div class="card-header">
                        <h5>User Activity</h5>
                    </div>
                    <div class="card-block">
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="{{asset('admin/assets/images/breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img" />
                                    <img src="{{asset('admin/assets/images/avatar-2.jpg')}}" alt="user image" class="img-radius profile-img" />
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="m-b-5">John Deo</h6>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="{{asset('admin/assets/images/breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img" />
                                    <img src="{{asset('admin/assets/images/avatar-2.jpg')}}" alt="user image" class="img-radius profile-img" />
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="m-b-5">John Deo</h6>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="{{asset('admin/assets/images/breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img" />
                                    <img src="{{asset('admin/assets/images/avatar-2.jpg')}}" alt="user image" class="img-radius profile-img" />
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="m-b-5">John Deo</h6>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-5">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="{{asset('admin/assets/images/breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img" />
                                    <img src="{{asset('admin/assets/images/avatar-2.jpg')}}" alt="user image" class="img-radius profile-img" />
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="m-b-5">John Deo</h6>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>

            
                   
            
        </div>
    </div>

@endsection
