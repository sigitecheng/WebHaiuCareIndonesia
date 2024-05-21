<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <!--Map-->
    <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.2.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="assets/js/calendar/bootstrap_calendar.css">
    <!--Nice select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    @vite('resources/css/app.css')

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title }}</title>
  </head>
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4">
            <div class="code text-blue-500 mt-5">404</div>
            {{-- <div class="title mb-4 text-center text-secondary text-uppercase">It looks like you have been lost...</div> --}}
            <div class="title mb-4 text-center text-secondary text-uppercase mt-2">
                <strong>"LOOKS LIKE YOU'RE LOST... OUR WEBSITE IS CURRENTLY UNDER <i class="fas fa-hammer"></i> CONTRUCTIONS. <i class="fas fa-spinner fa-spin"></i> PLEASE WAIT A MOMENT."</strong>
                <div class="text-center important">
                    <p class="mt-2">More For Info Click Me 
                        <a href="https://api.whatsapp.com/send?phone=6281321455855">
                            <button class="btn btn-success btn-circle ml-2">
                                <i class="fas fa-phone"></i>
                            </button>
                        </a>
                            {{-- <a href="https://api.whatsapp.com/send?phone=6281321455855" target="_blank" class="btn btn-success btn-circle" style="width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; text-align: center; position: relative;">
                                <i class="fas fa-phone" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </a> --}}
                        </p>
                </div>
            </div>

            <div class="buttons mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <button onclick="history.back();" class="btn bg-blue-500 btn-block p-2 text-white font-bold"><i class="fa fa-angle-left pull-left text-white"></i> Go back</button>
                    </div>
                    <div class="col-md-6">
                        <a href="/dashboard" class="btn bg-red-500 btn-block p-2 text-white font-bold">Go Home <i class="fa fa-angle-right pull-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="form-group mb-2">
                <label class="text-uppercase">Try to find something that you need:</label>
                <div class="input-group">
                    <input class="form-control rounded-0" type="text" placeholder="Enter keyword...">
                    <div class="input-group-btn">
                        <button class="btn button-custom rounded-0"><i class="btn bg-blue-500 fa fa-search text-white"></i></button>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="copyright text-center">
                <div class="mb-2">
                    <br>
                    &copy; 2024 <strong class="text-theme mb-2">HaiuCare Bangun Indonesia </strong>
                </div>
                
            </div>
            
            <!-- ./Copyright -->
            
        </div>

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
    
    </body>
</html>