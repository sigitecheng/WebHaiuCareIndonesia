@include('admin_dashboard.be_dashboard.dashboard.header')
  <body>

    {{-- PAGE LOADER --}}
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

@include('admin_dashboard.be_dashboard.dashboard.menuheader')
@include('admin_dashboard.be_dashboard.dashboard.sidebar')

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                {{-- <h5 class="mb-3" ><strong>Dashboard</strong></h5> --}}
                <div class="flex items-center">
                    <i class="fas fa-home text-blue-500 text-xl mr-2"></i>
                    <h4 class="text-blue-500 font-bold text-stroke mb-0">{{ $title_halaman }}</h4>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-8 col-md-8">
                        <!--Analytics-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Revenue Analytics</h6>
                            
                            <canvas id="revenueChart" height="300px"></canvas>
                            
                        </div>
                        <!--/Analytics-->

                    </div>

                    <div class="col-sm-4 col-md-4">
                        <!--Analytics-->
                        <div class="bg-white border shadow mb-4">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-globe text-theme"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>1,215,509</strong></h3>
                                    <p><small class="bc-description text-theme">TOTAL VISITORS</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border shadow mb-4">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-heart-o text-danger"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>83,509</strong></h3>
                                    <p><small class="bc-description text-danger">MENTIONS</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border shadow">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-lightbulb text-success"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>2,500</strong></h3>
                                    <p><small class="text-success bc-description">PROJECTS</small></p>
                                </div>
                            </div>
                        </div>
                        <!--/Analytics-->

                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-sm-6 col-md-4">
                        <!--Browser usage-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Browser usage</h6><hr>

                            <div id="radarChartEcharts"  style="height: 300px; width: 100%"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <!--Store summary-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Store summary</h6><hr>

                            <div id="donutChartEcharts" style="height: 300px; width: 100%"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <!--Profile card-->
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/home-right-admin-img.png" width="80px" height="80px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Rasheed Rayhan</strong></h6>
                                        <p class="mb-3 text-info"><strong>Web designer</strong></p>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Follow
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-4 mb-4">
                                    <div class="row user-about">
                                        <div class="col-sm-4 col-4 border-right">
                                            <h4>20</h4>
                                            <p>Photos</p>
                                        </div>
                                        <div class="col-sm-4 col-4">
                                            <h4>31</h4>
                                            <p>Videos</p>
                                        </div>
                                        <div class="col-sm-4 col-4 border-left">
                                            <h4>120</h4>
                                            <p>Tasks</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <p class="mb-3 mt-3 text-center p-space">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do 
                                </p>

                                <div class="flex-social mt-4 mb-3">
                                    <a href=""><i class="fa fa-facebook-square"></i></a>
                                    <a href=""><i class="fa fa-google-plus-square"></i></a>
                                    <a href=""><i class="fa fa-spotify"></i></a>
                                    <a href=""><i class="fa fa-yahoo-square"></i></a>
                                    <a href=""><i class="fa fa-twitter-square"></i></a>
                                    <a href=""><i class="fa fa-linkedin-square"></i></a>
                                    <a href=""><i class="fa fa-pinterest-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Realtime-->
                <div class="mt-3 row">
                    <div class="col-sm-12">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Realtime Updates</h6><hr>
                            
                            <div class="row mb-3">
                                <div class="col-sm-6 ol-12">
                                    <h5>Current sales</h5>
                                    <h1 class="text-theme">356</h1>
                                </div>
                                <div class="col-sm-6 ol-12 text-right">
                                    <h5>Revenue</h5>
                                    <h1 class="text-danger">$5545</h1>
                                </div>
                            </div>

                            <div id="realtimeDashboard" style="width: 100%; height:150px; overflow-x: auto"></div>
                        </div>
                    </div>
                </div>
                <!--/Realtime-->

                <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Recent Sales</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round">View all</button>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customer</th>
                                        <th>Categories</th>
                                        <th>Popularity</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">IphoneX</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+8</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="85" style="width: 85%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 4,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">One Plus</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" style="width: 55%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 650</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Samsumg S7</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+5</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Techno</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Sony Xperia</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" style="width: 60%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 3,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">HTC</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+18</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <!--/Recent sales-->
                </div>
                <!--Product summary-->
                
@include('admin_dashboard.be_dashboard.dashboard.footer')