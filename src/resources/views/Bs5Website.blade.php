<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Bootstrap5 Website </title>
    <link rel="stylesheet" href="{{ asset('css/Bs5Website.css') }}">
</head>
<body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h2 class="text-white pt-1">Bootstrap5 Website</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <button class="btn btn-primary ms-1">Join Us</button>
      </ul>
    </div>
  </div>
</nav>

<!-- hero section -->
<div class="hero vh-100 d-flex align-items-center" id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h1 class="display-4 text-white">Bootstrap5 Page</h1>
        <p class="text-white my-3">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore tempore repellat autem officia laudantium hic!
        </p>
        <a href="#" class="btn btn-primary me-2">Go Page</a>
        <a href="#" class="btn btn-outline-light">Contact</a>
      </div>
    </div>
  </div>
</div>

<!-- Service section -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="text-primary">SERVICES</h6>
        <h1>Services</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, voluptatibus.
        </p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox">
            <i class='bx bxs-comment-detail'></i>
          </div>
          <h5 class="mt-4 mb-2">Service</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptatem eveniet corporis ea atque aliquid?</p>
        </div>
      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>