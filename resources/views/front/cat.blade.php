@extends('front.layout')

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses : {{$cat->name}}</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
@foreach($courses as $c)
          <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$c->name}}</h4>
                  <p class="price">{{$c->price}}</p>
                </div>

                <h3><a href="course-details.html">{{$c->small_desc}}</a></h3>
                <p>{{$c->desc}}</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ asset('uploads/courses/'.$c->img) }}" class="img-fluid" alt="">
                    <span>{{$c->trainer->name}}</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
@endforeach
        </div>
    <div class="d-flex justify-content-center">
        {{ $courses->links() }}

    </div>
      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

@endsection
