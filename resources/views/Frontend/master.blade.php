<!DOCTYPE html>
<html lang="en">

@include('Frontend.head')

<body>

  <!-- ======= Header ======= -->

  @include('Frontend.header')

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->

  @include('Frontend.hero-section')

  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->

   @include('Frontend.about-section')

    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->

    @include('Frontend.why-section')

      <!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->

    @include('Frontend.counter')

      <!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->

    @include('Frontend.menu-section')

      <!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->

    @include('Frontend.testimonials')

      <!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->

    @include('Frontend.events-section')

      <!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->

    @include('Frontend.chefs-section')

      <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->

   @include('Frontend.book')

      <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->

    @include('Frontend.gallery')

      <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->

    @include('Frontend.contact')

      <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('Frontend.footer')

  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('Frontend.script')

</body>

</html>
