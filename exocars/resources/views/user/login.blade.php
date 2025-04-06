<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury car dealers</title>
  <link rel="stylesheet" href="{{ asset('/css/login/styles.css') }}" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>

<body>
  @include('components.navbar')
  <!-- Login form-->
  <div class="container form-container">
    <div class="col-md-6 col-lg-4">
      <form action="{{ route('make.login') }}" method="POST">
        @csrf
        <h1>Login</h1>

        <div class="input-group">
          <span class="input-group-text"><i class="bx bxs-envelope"></i></span>
          <input
            type="email"
            class="form-control"
            placeholder="E-mail"
            name="e_mail"
            value="{{ old('e_mail') }}"
            required />
        </div>

        <div class="input-group">
          <span class="input-group-text"><i class="bx bxs-lock-alt"></i></span>
          <input
            type="password"
            class="form-control"
            placeholder="Password"
            name="password"
            required />
        </div>

        <div class="remember-me">
          <input
            class="form-check-input"
            type="checkbox"
            id="remember"
            name="Remember me" />
          <label for="form-check-label">Remember me</label>
        </div>

        <button type="submit" class="btn btn-danger">Login</button>

        <div class="text-center">
          <p>Don't have an account? <a href="/register"> Register</a></p>
        </div>
      </form>
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