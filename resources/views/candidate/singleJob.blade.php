<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Chakuri.com</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('user')}}/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('user')}}/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/owl-carousel.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
</head>
<body>
<!-- Preloader Starts -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- Preloader End -->

<!-- Header Area Starts -->
@include('layouts/user/header')
<!-- Header Area End -->




<section class="job-single-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-content">

                    <div class="single-content2 py-4">
                        <h4>{{ $singleJobPost->jobCategory->categoryName }} <br>{{ $singleJobPost->jobCategory->categoryType }}</h4>
                        <p>{{$singleJobPost->jobDetails}}</p>
                    </div>
                    <div class="single-content3 py-4">
                        <h4>vacancy</h4>
                        <span class="ml-4">{{$singleJobPost->vacancy}}</span>
                    </div>
                    <div class="single-content4 py-4">
                        <h4>job responsibility</h4>
                        <p></p>
                        <ul>
                            <li class="mb-2">{{$singleJobPost->responsibility}}</li>

                        </ul>
                    </div>
                    <div class="single-content5 py-4">
                        <h4>Educational Requirements</h4>
                        <p>{{$singleJobPost->degreeType}}</p>

                    </div>
                    <div class="single-content6 py-4">
                        <h4>employment status</h4>
                        <span>{{$singleJobPost->employmentStatus}}</span>
                    </div>
                    <div class="single-content7 py-4">
                        <h4>Experience Requirements</h4>
                        <ul class="mt-3">
                            <li class="mb-2">{{$singleJobPost->experience}}</li>

                        </ul>
                    </div>
                    <div class="job-btn align-self-center">

                        <a href="#" class="third-btn">apply</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Footer Area Starts -->
@include('layouts/user/footer')
<!-- Footer Area End -->


<!-- Javascript -->
<script src="{{asset('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('user/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
<script src="{{asset('user/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('user/js/vendor/owl-carousel.min.js')}}"></script>
<script src="{{asset('user/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('user/js/vendor/ion.rangeSlider.js')}}"></script>
<script src="{{asset('user/js/main.js')}}"></script>
</body>
</html>
