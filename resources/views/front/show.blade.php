
  @extends('front.layout')
    @section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course {{$course->name}} Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
            <h3> {{$course->name}} / {{$course->cat->name}}</h3>
            <p>
                {{$course->desc}}
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p><a href="#">{{$course->trainer->name}}</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Price</h5>
              <p>
                {{$course->price}} DH
              </p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>created at</h5>
              <p>
                {{$course->created_at}}
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

  

  </main><!-- End #main -->
@endsection
