
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><a href="{{route('front.homepage')}}">{{$settings->logo}} </a></h3>
            <p>
                {{$settings->address}} <br>
                {{$settings->city}}<br>
              <strong>Phone:</strong>   {{$settings->phone}} <br>
              <strong>Email:</strong> {{$settings->email}}  <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Pages</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Categories</h4>
            <ul>
                @foreach($cats as $cat)
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('front.courseCat',$cat->id)}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>E-Larning</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

           by <a href="https://github.com/ouissal-edd">Ouissal ED-DOUJ</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{$settings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$settings->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$settings->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        {{-- <a href="{{$settings->twitter}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="{{$settings->twitter}}" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front/vendor')}}/purecounter/purecounter.js"></script>
  <script src="{{asset('front/vendor')}}/aos/aos.js"></script>
  <script src="{{asset('front/vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front/vendor')}}/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('front/vendor')}}/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front/js')}}/main.js"></script>

</body>

</html>
