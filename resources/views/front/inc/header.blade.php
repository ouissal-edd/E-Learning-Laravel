<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-learning</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link  href="{{asset('front/vendor')}}/animate.css/animate.min.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/aos/aos.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/remixicon/remixicon.css" rel="stylesheet">
  <link  href="{{asset('front/vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link  href="{{asset('front/css')}}/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('front.homepage')}}">{{$settings->logo}}</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('front.homepage')}}">Home</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach($cats as $cat)
                <li><a href="{{route('front.courseCat',$cat->id)}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>
          </li>
          <li><a href="{{route('front.contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <a href="courses.html" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->
