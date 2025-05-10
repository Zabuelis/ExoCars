<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury car dealers</title>
  <link rel="stylesheet" href="{{ asset('css/home/styles.css') }}" />
</head>

<body>

  @include('components.navbar')
  <!-- Image display -->
  <div class="hero">
    <img
      src="{{ asset('/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg') }}"
      class="img-fluid"
      alt="Ferrari" />
    <p class="text-center position-absolute">Welcome to ExoCars</p>
  </div>

  <!-- Text in cubes-->
  <div class="container">
    <div class="row gy-5">
      <div class="col-6">
        <div class="p-3">
          We're the biggest distributors of Ferrari automobiles in Lithuania.
        </div>
      </div>
      <div class="col-6">
        <div class="p-3">We're officialy partnered with Ferrari.</div>
      </div>
      <div class="col-6">
        <div class="p-3">We promise to take care of all your problems.</div>
      </div>
      <div class="col-6">
        <div class="p-3">We make dreams become reality.</div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  @include('components.footer')


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>