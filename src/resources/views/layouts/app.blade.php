<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

<body>

  <!-- ***** Preloader Start ***** -->
  @include('layouts.preloader')
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('layouts.navbar')
  <!-- ***** Header Area End ***** -->

  @include('components.banner')

  @include('components.services')

  @include('components.about-us')

  @include('components.courses')

  @include('components.fun-facts')

  @include('components.team')

  @include('components.testimonials')

  @include('components.events')

  @include('components.contact')

  @include('layouts.footer')

</body>
</html>