<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Unklab Dine made by SE Summer 2022" />
    <meta name="author" content="SE Summer 2022" />
    <title>U Dine</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.svg" />
    <!-- CSS only -->
    <link rel="stylesheet" href="./assets/css/main.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
  </head>
  <body class="d-flex flex-column h-100 pt-5">
    <header class="header-shadow">
      <!-- Fixed navbar -->
      <nav
        class="navbar navbar-expand-md navbar-white fixed-top bg-white shadow-sm"
      >
        <div class="container">
          <div>
            <img src="./assets/images/header-icon.svg" alt="" />
            <a
              class="navbar-brand fw-normal text-black ms-2 logo-font"
              href="./"
              >Unklab Dine</a
            >
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list text-dark"></i>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 fw-semibold">
              <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-primary"
                  aria-current="page" href="#">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./rate">Rate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./menu">Best Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./rating"
                  >Overall Rating</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main class="mt-4">
      <div
        class="container d-flex justify-content-between flex-lg-row flex-column"
      >
        <div class="d-flex align-items-center">
          <h3 class="fw-semibold text-primary me-3">Rating</h3>
          <p class="mt-2 fw-light">
            @if(sizeof($quote) > 0)
            {{$quote[rand(0, sizeof($quote)-1)]->quote}}
            @endif
          </p>
        </div>
        <div
          class="d-flex flex-row-reverse flex-lg-row justify-content-between"
        >
          <p
            class="fw-medium text-primary lh-sm me-lg-3 text-lg-end text-start"
          >
          <?php echo date('l')?> <br/>
          <span class="text-primary-dark"><?php echo date('d F Y')?></span>
          </p>
          <div>
          <a href="./rate">
            <button
              class="btn btn-primary text-white fw-medium px-5 btn-shadow"
            >
              Rate Now!
            </button></a>
          </div>
        </div>
      </div>

    <div class="container-lg mt-3">
    <h1 align="center" class="fw-semibold text-primary me-3">Cafetaria Schedule</h1>
    <h6 align="center" class="fw-semibold text-primary me-3">{{$test}}</h6>

    </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted">Made by SE Summer 2022 with ❤️</span>
      </div>
    </footer>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
  <script src="./assets/js/main.js"></script>
</html>

