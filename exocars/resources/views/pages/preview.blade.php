<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury car dealers</title>
  <link rel="stylesheet" href="{{ asset('/css/preview/styles.css') }}" />
</head>

<body>
  <header>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"> ExoCars </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/listings">Listings</a>
            <a class="nav-link" href="/login">Log In </a>
            <a class="nav-link" href="/admin">Admin Panel </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Display of car's image and information-->
  <div class="fluid-container main">
    <div class="car-presentation">
      <h1 class="h1">{{ $listing['manufacturer'] }} {{ $listing['model'] }}</h1>
      <img
        src="{{ ('/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg') }}"
        class="img-fluid" />
      <h3 class="h3">Vehicle Information</h3>
      <div class="car-information">
        <div class="list">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Brand</th>
                <td>{{ $listing['manufacturer'] }}</td>
              </tr>
              <tr>
                <th scope="row">Model</th>
                <td>{{ $listing['model'] }}</td>
              </tr>
              <tr>
                <th scope="row">Make Year</th>
                <td>{{ $listing['make_year'] }}</td>
              </tr>
              <tr>
                <th scope="row">Mileage</th>
                <td>{{ $listing['mileage'] }} km</td>
              </tr>
              <tr>
                <th scope="row">Color</th>
                <td>{{ $listing['color'] }}</td>
              </tr>
              <tr>
                <th scope="row">Condition</th>
                <td>Mint</td>
              </tr>
              <tr>
                <th scope="row">Price</th>
                <td>{{ $listing['price'] }} Euro</td>
              </tr>
              <tr>
                <th scope="row">Displacement</th>
                <td>{{ $listing['displacement'] }} l</td>
              </tr>
              <tr>
                <th scope="row">Power</th>
                <td>{{ $listing['power'] }} kw</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="meet">
        <a href="#" class="btn btn-danger">Schedule a meeting</a>
      </div>
    </div>
  </div>

  <!-- Footer-->
  <footer>
    <div class="container-fluid footer">
      <p>All rights reserved to ExoCars®</p>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>