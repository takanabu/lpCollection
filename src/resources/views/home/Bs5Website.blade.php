<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- アドセンス -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1125921042756654"
        crossorigin="anonymous"></script>



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
                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <h1 class="display-4    text-white">Bootstrap5 Page</h1>
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
        </section>

        <!-- Features section -->
        <section class="row ry-0 bg-light">
            <div class="col-lg-6 col-img"></div>
                <div class="col-lg-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 pt-4 offset-md-1">
                                <h6 class="text-primary">why to choose us?</h6>
                                <h1>Create your Idea</h1>
                                <P>
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius repellat soluta velit ipsa sequi?
                                </P>

                                <div class="feature d-flex mt-5">
                                    <div class="iconbox me-3">
                                    <i class='bx bxs-comment-detail'></i>
                                </div>
                                <div>
                                    <h5>Create</h5>
                                    <p>
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, deleniti!
                                    </p>
                                </div>
                            </div>
                            <div class="feature d-flex mt-5">
                                <div class="iconbox me-3">
                                    <i class='bx bxs-comment-detail'></i>
                                </div>
                                <div>
                                    <h5>Create</h5>
                                    <p>
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, deleniti!
                                    </p>
                                </div>
                            </div>
                            <div class="feature d-flex mt-5">
                                <div class="iconbox me-3">
                                    <i class='bx bxs-comment-detail'></i>
                                </div>
                                <div>
                                    <h5>Create</h5>
                                    <p>
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, deleniti!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects section -->
        <section id="projects">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="text-primary">Projects</h6>
                        <h1>Recent Projects</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, voluptatibus.
                        </p>
                    </div>
                </div>

                <div class="row g-3">
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro1.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro2.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro3.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro4.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro5.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="project">
                      <img src="/img/bs5website/pro6.jpg" alt="">
                      <div class="overlay">
                        <div>
                          <h4 class="text-white">project Title</h4>
                          <h6 class="text-white">Website Design</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- team section -->
        <section id="team" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="text-primary">Team</h6>
                        <h1>Our Fair & Simple Pricing</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, voluptatibus.
                        </p>
                    </div>
                </div>

                <div class="row g-3">
                  <div class="col-lg-3 col-sm-6 text-center">
                    <div class="team-member card-effect">
                      <img src="./img/bs5website/team1.jpg" alt="">
                      <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                      <p>Web Developer</p>
                      <div class="social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center">
                    <div class="team-member card-effect">
                      <img src="./img/bs5website/team2.jpg" alt="">
                      <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                      <p>Web Developer</p>
                      <div class="social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center">
                    <div class="team-member card-effect">
                      <img src="./img/bs5website/team3.jpg" alt="">
                      <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                      <p>Web Developer</p>
                      <div class="social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center">
                    <div class="team-member card-effect">
                      <img src="./img/bs5website/team4.jpg" alt="">
                      <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                      <p>Web Developer</p>
                      <div class="social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- blog section -->
        <section id="blog" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="text-primary">Blog</h6>
                        <h1>Latest News From The Blog</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, voluptatibus.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                  <div class="col-md-4">
                    <div class="blog-card card-effect">
                      <img src="./img/bs5website/blog1.jpg" alt="">
                      <h5 class="mb-0 mt-4">
                        <a href="#">Designing smart and slick Bootstrap 5 Website</a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, assumenda.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="blog-card card-effect">
                      <img src="./img/bs5website/blog2.jpg" alt="">
                      <h5 class="mb-0 mt-4">
                        <a href="#">Designing smart and slick Bootstrap 5 Website</a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, assumenda.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="blog-card card-effect">
                      <img src="./img/bs5website/blog3.jpg" alt="">
                      <h5 class="mb-0 mt-4">
                        <a href="#">Designing smart and slick Bootstrap 5 Website</a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, assumenda.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section id="contact" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="text-primary">Contact</h6>
                        <h1>Get In Touch</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, voluptatibus.
                        </p>
                    </div>
                </div>

                <form action="" class="row g-3 justify-content-center">
                  <div class="col-md-5">
                    <input
                      type="text"
                      class="form-control" placeholder="Full Name">
                  </div>
                  <div class="col-md-5">
                    <input
                      type="text"
                      class="form-control" placeholder="Enter E-mail">
                  </div>
                  <div class="col-md-10">
                    <input type="text"
                      class="form-control"
                      placeholder="Enter subject">
                  </div>
                  <div class="col-md-10">
                    <textarea
                      name=""
                      id=""
                      cols="30"
                      rows="5"
                      class="form-control"
                      placeholder="Enter Message">
                    </textarea>
                  </div>
                  <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                  </div>

                </form>
            </div>
        </section>

        <!-- footer section -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <h2 class="text-white">Bootstrap5</h2>
                </div>
                <div class="col-md-2">
                  <h5 class="text-white">Brand</h5>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <h5 class="text-white">More</h5>
                  <ul class="list-unstyled">
                    <li><a href="#">FAQ&'s</a></li>
                    <li><a href="#">Privacy $ Policy</a></li>
                    <li><a href="#">Warrantry</a></li>
                    <li><a href="#">Shipment</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h5 class="text-white">Pages</h5>
                  <ul class="list-unstyled">
                    <li><a href="#">Address: 2715 Ash Dr. San Jose, South Dakota 83475</a></li>
                    <li><a href="#">Email: @gmail.com</a></li>
                    <li><a href="#">Phone: 111-222-333</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>