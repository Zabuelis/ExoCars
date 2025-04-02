<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luxury car dealers</title>
    <link rel="stylesheet" href="{{ asset('/css/login/styles.css') }}" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
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
          aria-label="Toggle navigation"
        >
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

    <!-- Login form-->
    <div class="container form-container">
      <div class="col-md-6 col-lg-4">
        <form>
          <h1>Login</h1>

          <div class="input-group">
            <span class="input-group-text"
              ><i class="bx bxs-envelope"></i
            ></span>
            <input
              type="email"
              class="form-control"
              placeholder="E-mail"
              required
            />
          </div>

          <div class="input-group">
            <span class="input-group-text"
              ><i class="bx bxs-lock-alt"></i
            ></span>
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              required
            />
          </div>

          <div class="remember-me">
            <input
              class="form-check-input"
              type="checkbox"
              id="remember"
              name="Remember me"
            />
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
      crossorigin="anonymous"
    ></script>
  </body>
</html>
