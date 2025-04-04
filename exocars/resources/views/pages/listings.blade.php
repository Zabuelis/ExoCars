<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury car dealers</title>
  <link rel="stylesheet" href="{{ asset('/css/listings/styles.css') }}" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>

<body>
  <!--Navbar-->
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

  <!-- Search bar -->
  <div class="filter-container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="search-container">
          <input
            type="text"
            id="carSearch"
            onkeyup="searchCars()"
            class="form-control search-input"
            placeholder="Search..." />
          <i class="bx bx-search-alt search-icon"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Grid display of listed cars-->
  <div class="main-container">
    <div class="container-list mt-4">
      <div class="row g-5" id="carRow">
        @foreach($listings as $listing)
        <div class="col">
          <div class="card">
            <img
              src="{{ asset($listing['img_path']) }}"
              class="card-img-top"
              alt="..." />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $listing['model'] }}</h5>
              <p class="card-text">
                {{ $listing['comments'] }}
              </p>
              <div class="mt-auto text-start">
                <a href="/preview/{{ $listing['c_id'] }}" class="btn btn-danger">Preview</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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

  <script src="{{ asset('js/listings/scripts.js') }}"></script>
</body>

</html>