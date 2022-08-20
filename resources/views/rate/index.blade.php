<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Unklab Dine made by SE Summer 2022" />
  <meta name="author" content="SE Summer 2022" />
  <title>U Dine</title>
  <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.svg" />
  <!-- CSS only -->
  <link rel="stylesheet" href="../../assets/css/main.min.css" />
  <link rel="stylesheet" href="../../assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="d-flex flex-column h-100 pt-5">
  <header class="header-shadow">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white shadow-sm">
      <div class="container">
        <div>
          <img src="../../assets/images/header-icon.svg" alt="" />
          <a class="navbar-brand fw-normal text-black ms-2 logo-font" href="../">Unklab Dine</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list text-dark"></i>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 fw-medium">
            <li class="nav-item">
              <a class="nav-link" href="../../">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-primary" aria-current="page" href="#">Rate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".././menu">Best Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".././rating">Overall Rating</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main class="mt-4">
    <!-- Header -->
    <div class="container d-flex justify-content-between flex-lg-row flex-column">
      <div class="d-flex align-items-center">
        <h3 class="fw-semibold text-primary me-3">Rating</h3>
        <p class="mt-2 fw-light fs-smaller">@if(sizeof($quote) > 0)
            {{$quote[rand(0, sizeof($quote)-1)]->quote}}
            @endif</p>
      </div>
      <div class="d-flex flex-row-reverse flex-lg-row justify-content-between">
        <p class="fw-medium text-primary lh-sm me-lg-3 text-lg-end text-start">
        <?php echo date('l')?> <br/>
          <span class="text-primary-dark"><?php echo date('d F Y')?></span>
        </p>
        <!-- <div>
          <button class="btn btn-primary text-white fw-medium px-5 btn-shadow">
            Rate Now!
          </button> -->
        </div>
      </div>
    </div>
    <!-- End of Header -->
    <!-- <div class="container">
      <br /><br />
      <ul class="list-unstyled multi-steps">
        <li class="is-active">Environment</li>
        <li>Service</li>
        <li>Food</li>
      </ul>
    </div> -->

    <form action="/rate/done" method="POST">
      @csrf
      <div class="container border border-primary rounded-3 py-4 mt-3">
        <div class="container text-center">
          <h1 class="fw-bold text-primary lh-1">Information</h1>
          <p class="text-muted">
            Before we start please fill up the blank fields below
          </p>
        </div>

        <div class="container field-container">
          <div class="mb-3">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">Name</label><span class="fs-smaller text-mute">optional</span>
            </div>
            <input type="text" class="form-control" id="inputName" placeholder="Griffin" aria-describedby="name" name="responden[]"/>
          </div>

          <!-- <div class="mb-3">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">What you eat?</label>
            </div>
            <select type="email" class="form-select" id="inputName" aria-describedby="name" required>
              <option selected disabled value="">Nasi, sayur, roti</option>
              <option value="">...</option>
            </select>
          </div> -->
          <!-- <div>
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">What you eat?</label><span class="fs-smaller text-mute"><i
                  class="bi bi-exclamation-circle-fill me-2 fs-6 text-warning" data-bs-toggle="tooltip"
                  data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                  title=""></i></span>
            </div>
            <input type="email" class="form-control" id="inputName" placeholder="Nasi, sayur, roti"
              aria-describedby="name" />
          </div> -->
        </div>
      </div>

      <div class="container border border-primary rounded-3 py-4 mt-3">
        <div class="container text-center">
          <h1 class="fw-bold text-primary lh-1">Environment</h1>
          <p class="text-muted">Rate the environment when you eat</p>
        </div>
        
        <div class="container d-flex justify-content-center align-items-center mb-3">

          <div class="rating d-flex flex-row-reverse">
            <input type="radio" name="rating[0]" id="rating-5" value="5"/>
            <label for="rating-5"></label>
            <input type="radio" name="rating[0]" id="rating-4" value="4"/>
            <label for="rating-4"></label>
            <input type="radio" name="rating[0]" id="rating-3" value="3"/>
            <label for="rating-3"></label>
            <input type="radio" name="rating[0]" id="rating-2" value="2"/>
            <label for="rating-2"></label>
            <input type="radio" name="rating[0]" id="rating-1" value="1"/>
            <label for="rating-1"></label>
          </div>
        </div>

        <div class="container field-container">
          <div>
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">Comment</label>
            </div>
            <textarea class="form-control" placeholder="Leave a comment here" id="inputComment"
              style="height: 100px" name="comments[]"></textarea>
          </div>
        </div>
      </div>
      <div class="container border border-primary rounded-3 py-4 mt-3">
        <div class="container text-center">
          <h1 class="fw-bold text-primary lh-1">Service</h1>
          <p class="text-muted">Rate how they serve you</p>
        </div>
        
        <div class="container d-flex justify-content-center align-items-center mb-3">

          <div class="rating d-flex flex-row-reverse">
              <input type="radio" name="rating[1]" id="rating-25" value="5" />
              <label for="rating-25"></label>
              <input type="radio" name="rating[1]" id="rating-24" value="4" />
              <label for="rating-24"></label>
              <input type="radio" name="rating[1]" id="rating-23" value="3" />
              <label for="rating-23"></label>
              <input type="radio" name="rating[1]" id="rating-22" value="2" />
              <label for="rating-22"></label>
              <input type="radio" name="rating[1]" id="rating-21" value="1" />
              <label for="rating-21"></label>
          </div>
        </div>

        <div class="container field-container">
          <div>
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">Comment</label>
            </div>
            <textarea class="form-control" placeholder="Leave a comment here" id="inputComment"
              style="height: 100px" name="comments[]"></textarea>
          </div>
        </div>
      </div>
      <div class="container border border-primary rounded-3 py-4 mt-3">
        <div class="container text-center">
          <h1 class="fw-bold text-primary lh-1">Food</h1>
          <p class="text-muted">Rate the taste of the Food</p>
        </div>
        
        <div class="container d-flex justify-content-center align-items-center mb-3">

          <div class="rating d-flex flex-row-reverse">
              <input type="radio" name="rating[2]" id="rating-35" value="5" />
              <label for="rating-35"></label>
              <input type="radio" name="rating[2]" id="rating-34" value="4" />
              <label for="rating-34"></label>
              <input type="radio" name="rating[2]" id="rating-33" value="3" />
              <label for="rating-33"></label>
              <input type="radio" name="rating[2]" id="rating-32" value="2" />
              <label for="rating-32"></label>
              <input type="radio" name="rating[2]" id="rating-31" value="1" />
              <label for="rating-31"></label>
          </div>
        </div>

        <div class="container field-container">
          <div class="mb-3">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">Comment</label>
            </div>
            <textarea class="form-control" placeholder="Leave a comment here" id="inputComment"
              style="height: 100px " name="comments[]"></textarea>
          </div>
          <!-- <div>
            <label for="formFile" class="form-label fw-medium lh-1">Add image</label>
            <input class="form-control" type="file" id="formFile" />
          </div> -->
        </div>
      </div>
      <div class="d-flex mx-auto mt-3 mb-5 field-container">
        <button class="btn btn-primary text-white fw-medium px-5 btn-shadow w-100">
          Submit
        </button>
      </div>
    </form>
  </main>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">Made by SE Summer 2022 with ❤️</span>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../../assets/js/main.js"></script>

</html>