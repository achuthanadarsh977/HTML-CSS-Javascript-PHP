<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width , initial-scale = 1.0">
    <title>TJ Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        .poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}

.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}

.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}

.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}

.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}

.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}

.custom-bg{
  background-color: #2ec1ac;
}

.custom-bg:hover{
  background-color: #279e8c;
}

    </style>
    </head>
    <body>
       
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">TJ Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active me-2" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Facilities</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>

        <div class="d-flex">
          <button class="btn btn-outline-dark shadow-none me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="login.php">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel"><i class="bi bi-person-circle me-2"></i>User Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional: Register Modal (placeholder) -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel"><i class="bi bi-person-plus me-2"></i>Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
           
        </div>
      </div>
    </div>
  </div>

<!-- Carousel -->
  <div class = "container-fluid">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_15372.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_55677.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_62045.png" class="w-100 d-block"/>
      </div>
       <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_93127.png" class="w-100 d-block"/>
      </div>
       <div class="swiper-slide">
        <img src="Hotel-Booking-Website-Assets-main/images/carousel/IMG_99736.png" class="w-100 d-block"/>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
<!-- Check Availability Form -->
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-10 bg-white shadow p-4 rounded">
      <h5 class="mb-3">Check Booking Availability</h5>

      <form>
        <div class="row g-3 align-items-end">

          <div class="col-lg-3 mb-3">
            <label class="form-label fw-semibold">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>

          <div class="col-lg-3 mb-3">
            <label class="form-label fw-semibold">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>

          <div class="col-lg-3  mb-3">
            <label class="form-label fw-semibold">Adults</label>
            <select class="form-select shadow-none">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>

            </select>
          </div>

          <div class="col-lg-2 mb-3">
            <label class="form-label fw-semibold">Children</label>
            <select class="form-select shadow-none">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>

          <div class="col-lg-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>

        </div>
      </form>

    </div>
  </div>

<!-- Our Rooms -->
   <h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
   <div class = "container">
    <div class = "row">
    <div class = "col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
  <img src="Hotel-Booking-Website-Assets-main/images/rooms/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Simple Room Name</h5>
    <h6 class="mb-4">₹200 per night</h6>
    <div class = "features mb-4">
    <h6 class = "mb-1">Features</h6>
    <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      2 Rooms
    </span>
    <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      1 Bathroom
    </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      1 Balcony
    </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      3 Sofas
    </span>
</div>
   <div class = "facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      Wifi
     </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      Television
     </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      AC
     </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      Wifi
     </span>
     <span class = "badge rounded-pill bg-light text-dark  text-wrap">
      Room Heater
     </span>
   </div>

   <div class = "rating mb-4">
    <h6 class="mb-1">Rating</h6>
    <span class = "badge rounded-pill bg-light">
      <i class = "bi bi-star-fill text-warning"></i>
      <i class = "bi bi-star-fill text-warning"></i>
      <i class = "bi bi-star-fill text-warning"></i>
      <i class = "bi bi-star-fill text-warning"></i>
</span>
   </div>


   <div class = "d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>
</div>
    </div>
    <div class = "col-lg-12 text-center mt-5">
      <a href = "#" class = "btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
</div>
    


</div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
   <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
       delay:3500,
       disableOnInteraction:false
    }});
  </script>
    </body>
</html>
