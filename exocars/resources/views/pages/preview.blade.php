<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury car dealers</title>
  <link rel="stylesheet" href="{{ asset('/css/preview/styles.css') }}" />
</head>

<body>
  @include('components.navbar')
  <!-- Display of car's image and information-->
  @if(session('failed'))
  <div class="alert alert-danger" role="alert">
    {{ session('failed') }}
  </div>
  @endif
  <div class="fluid-container main">
    <div class="car-presentation">
      <h1 class="h1">{{ $listing['manufacturer'] }} {{ $listing['model'] }}</h1>
      <div id="carouselExampleIndicators" class="carousel slide car_slide">
        <div class="carousel-inner">
          @php
          $index = 0
          @endphp
          @foreach($images as $image)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ $image }}" class="d-block w-100 carousel_image" alt="...">
          </div>
          @php
          $index++
          @endphp
          @endforeach
          @if($index > 1)
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          @endif
        </div>
      </div>
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
        <button id="meet_btn" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Schedule a meeting
        </button>
        @if($errors->any())
        <div class="alert alert-warning" role="alert">
          @foreach($errors->all() as $error)
          {{ $error }}<br>
          @endforeach
        </div>
        @endif
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule a Meeting</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('create.meeting') }}" method="POST">
                @csrf
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <input id="car_id" class="form-control" type="hidden" name="c_id" value="{{ $listing['c_id'] }}" readonly>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <input id="acc_id" class="form-control" type="hidden" name="a_id" value="{{ Auth::user()->a_id }}" readonly>
                      </div>
                    </div>
                  </div>
                  @livewire('meeting-form')
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer-->
  @include('components.footer')

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="{{ asset('/js/preview/scripts.js') }}"></script>

</body>

</html>