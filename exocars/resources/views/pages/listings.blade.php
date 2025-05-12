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
  @include('components.navbar')
  <!-- Grid display of listed cars-->
  <div class="main-container">
    <div class="container-sm mt-4">
      <div class="row g-5 justify-content-start" id="carRow">
        @foreach($listings as $listing)
        <div class="col-md-4">
          <div class="card">
            <img
              src="{{ asset($listing->img_path) }}"
              class="card-img-top"
              alt="..." />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $listing->model }}</h5>
              <p class="card-text">
                {{ $listing->comments }}
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
  <div class="container-sm">
    {{ $listings->links('pagination::bootstrap-5') }}
  </div>
  <!-- Footer-->
  @include('components.footer')

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>