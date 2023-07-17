<!DOCTYPE html>
<html lang="en">

<head>
<title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edfe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#hummingbirds">Hummingbirds</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#birds of prey">Birds of Prey</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#waterfowl">Waterfowl</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/USFWS_ribes_sanguineum_(26123508822).jpg" alt="Hummingbirds">
      <div class="carousel-caption d-none d-md-block">
            <h3>Hummingbirds</h3>
        </div>
    </div>
    <div class="carousel-item">
    <img src="images/00SCI-EGGS-condor-bvgf-videoSixteenByNine3000.jpg" alt="Birds of Prey">
        <div class="carousel-caption d-none d-md-block">
        <h3>Birds of Prey</h3>
    </div>
    </div>

    <div class="carousel-item">
    <img src="images/1ANDY072922.jpg" alt="Waterfowl">
        <div class="carousel-caption d-none d-md-block">
        <h3>Waterfowl</h3>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="hummingbirds">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Hummingbirds</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/maxresdefault.jpg"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/052622_rc_hummingbirds_feat-1030x580.jpg"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/google-hummingbird-623189e488ff2-sej-1280x720.jpg"class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="birds of prey">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Birds of Prey</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/Bearded_vulture_teaser.webp"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/indir.jpg"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/SnowyOwl-Mandel.jpg"class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="waterfowl">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Waterfowl</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/Hooded_Merganser_19103799384-1.jpg"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/mandarin-duck.jpg"class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/Egyptian-goose-couple-swimming-on-the-pond-ee221123.jpg"class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post" >
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name"class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email"class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </section>
    </a>

    <a id="about">
    <section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About</h2>
    </div>
    <div class="container-fluid">
        <p class="text-center"><b>I have an interest in birds and passionate about photographing them.
            </b></p>
    </div>
    </section>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>