<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My hotel</title>
  <!--bootstrap 5 css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--external css file-->
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-- loading pages -->
  <div class="box ">
    <div class="spinner-grow spinner-grow-sm text-white me-4"></div>

    <div class="spinner-grow spinner-grow-sm text-white me-4"></div>

    <div class="spinner-grow spinner-grow-sm text-white me-4"></div>
  </div>


  <div class="box2" style="width:100%;">
    <header>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/h1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Welcome To Hotel</h1>
              <p>Hotel & Resort</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/h7.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h3>RELAXING ROOM</h3>
              <p>Your Room Your Stay</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/h3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Unique Experience</h3>
              <p>Enjoy with us</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <!--------------------------------- navbar ---------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
      <div class="container">
        <a class="navbar-brand fw-bold" href="hotel1.php">Fu<span style="color: red;">S</span>ion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- -----navbar -->
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white me-2" href="hotel1.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-2" href="room1.php">ROOMS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-2" href="gallery1.php">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-2" href="about1.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-2" href="contact1.php">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-2"><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                  data-bs-target="#exampleModal1">MY-ROOM</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-toggle text-white me-2" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button type="button"
                  class="btn btn-danger" data-bs-toggle="modal">ME</button></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="nav-link text-white me-2"><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Profile</button></a>

                <div class="dropdown-divider"></div>
                <a class="nav-link text-white me-2"><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal3">Log-Out</button></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>
  <br>
  <br>

  <!-- ------mode3---------------- -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Your login form goes here -->

        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Your Profile</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your login form -->

          <form id="signupForm" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
              <span id="name_err"></span>
            </div>



            <!-- Edit button -->
            <button type="button" id="j1" name="j1" class="btn btn-primary btn-block mb-4">Edit</button>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- ------mode4---------------- -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Your login form goes here -->

        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Thank you for Sing-in</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <!-- Edit button -->
          <center> <button type="button" id="j1" name="j1" class="btn btn-primary btn-block mb-4">Log-Out</button>
          </center>
        </div>
      </div>
    </div>
  </div>
  </div>






  <!-- ------mode2---------------- -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabe" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Your login form goes here -->

        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Book The Room!</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"><br><br>
          <center>
            <h4>My-Booking</h4>
          </center><br><br>
          <form id="signupForm" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
              <span id="name_err"></span>
            </div>

            <h4>Step 2:Properity details</h4><br><br>

            <div class="mb-3"><label for="room-type">Room-type:&nbsp;</label>
              <select id="type">
                <option value="Standerd">Standard-Room</option>
                <option value="Family">Famliy-Room</option>
                <option value="Delux">Delux-Room</option>
                <option value="king">King-Room</option>
                <option value="Oueen">Oueen-Room</option>
                <option value="Quad">Quad-Room</option>
              </select>
            </div>
            <label for="total_p">Total Persion:</label>
            <input type="number" id="p2" name="p2" required><br><br>
            <label for="check-in">Check-in Date:&nbsp;&nbsp;</label>
            <input type="date" id="d1" name="d1" required><br><br>

            <label for="check-out">Check-out Date</label>
            <input type="date" id="d2" name="d2" required><br><br>



            <label for="toal">Total amount:$1000 /per-day.</label><br><br>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- ------model---------------- -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Your login form goes here -->

        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Book The Room!</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your login form -->
          <h4>Step 1:Your Details</h4><br><br>
          <form id="signupForm" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="n21" name="n21">
              <span id="name_err" class="text-danger"></span>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email">
              <span id="email_err" class="text-danger"></span>
            </div>
            <div class="mb-3">
              <label for="mo" class="form-label">Mobile Number:</label>
              <input type="text" class="form-control" id="mo" name="mo">
              <span id="mo_err" class="text-danger"></span>
            </div>
            <h4>Step 2: Property details</h4><br><br>
            <div class="mb-3">
              <label for="room-type">Room-type:&nbsp;</label>
              <select id="type" class="form-control">
                <option value="Standard">Standard-Room</option>
                <option value="Family">Family-Room</option>
                <option value="Deluxe">Deluxe-Room</option>
                <option value="King">King-Room</option>
                <option value="Queen">Queen-Room</option>
                <option value="Quad">Quad-Room</option>
              </select>
            </div>
            <label for="total_p">Total Person:</label>
            <input type="number" id="p2" name="p2" class="form-control" required><br><br>
            <div class="mb-3">
              <label for="check-in">Check-in Date:</label>
              <input type="date" id="a1" name="a888" class="form-control" required>
              <span id="a1_err" class="text-danger"></span>
            </div>
            <div class="mb-3">
              <label for="check-out">Check-out Date</label>
              <input type="date" id="a2" name="a2" class="form-control" required>
              <span id="a2_err" class="text-danger"></span>
            </div>
            <div class="mb-3">
              <label for="special-requests">Special Requests:</label>
              <textarea id="special-requests" name="special-requests" class="form-control" rows="1"></textarea>
            </div>
            <label for="ptm">Payment Method:</label>
            <input type="radio" name="payment_method" id="p2" value="cash" required>&nbsp;&nbsp;Cash<br><br>
            <label for="total">Total amount: $1000 /per-day.</label><br><br>
            <!-- Submit button -->
            <button type="button" id="confirmBookBtn" class="btn btn-primary btn-block mb-4">Confirm Book!</button>
          </form>

        </div>
      </div>
    </div>
  </div>
  </div>
  <!------------------------Scripth for validation------------->







  
  <!------------------------Scripth for auto date------------->
  <script>
    var d = new Date()
    var yr = d.getFullYear();
    var month = d.getMonth() + 1

    if (month < 10) {
      month = '0' + month

    }
    var date = d.getDate();
    if (date < 10) {
      date = '0' + date
    }
    var c_date = yr + "-" + month + "-" + date;
    document.getElementById('a888').value = c_date;
    document.getElementById('d2').value = D_date;</script>
  <!-- ---------------------our rooms----------------------- -->

  <h1 class="text-center" style="text-decoration: underline; font-family:serif;">Our Rooms</h1>
  <br>

  <div class="container g-3 mt-6">
    <div class="row ">
      <div class="col-lg-4 mb-4 mb-lg-0  text-center ">
        <div class="card">
          <img class="card-img-top w-100" src="img/h2.jpg" alt="Standard Room">
          <div class="card-body text-center">
            <h4 class="card-title">Standard Room</h4>
            <p class="card-text" style="color:#5c7893">₹1000/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0 text-center  ">
        <div class="card">
          <img class="card-img-top w-100" src="img/h7.jpg" alt="Family Room">
          <div class="card-body text-center">
            <h4 class="card-title">Family Room</h4>
            <p class="card-text" style="color:#5c7893">₹1500/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0 text-center ">
        <div class="card">
          <img class="card-img-top w-100" src="img/delux_room.jpg" alt="Delux Room">
          <div class="card-body text-center">
            <h4 class="card-title">Delux Room</h4>
            <p class="card-text" style="color:#5c7893">₹2000/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="row ">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <img class="card-img-top w-100" src="img/king-room.jpg" alt="Standard Room">
          <div class="card-body text-center">
            <h4 class="card-title">king Room</h4>
            <p class="card-text" style="color:#5c7893">₹1999/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0 ">
        <div class="card">
          <img class="card-img-top w-100" src="img/queen-room.jpg" alt="Family Room">
          <div class="card-body text-center">
            <h4 class="card-title">Queen Room</h4>
            <p class="card-text" style="color:#5c7893">₹1999/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <img class="card-img-top w-100" src="img/quadroom.jpg" alt="Delux Room">
          <div class="card-body text-center">
            <h4 class="card-title">Quad Room</h4>
            <p class="card-text" style="color:#5c7893">₹2000/per day</p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- -------------hotel features------- -->
  <br>
  <br>


  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h1 class="mb-5 text-center" style="text-decoration: underline; font-family:serif;">Hotel Features</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-pool display-3 mb-3 d-block text-primary"><i class="fa-solid fa-water-ladder"
              style="color: #ff1900;"></i></span>
          <h2 class="h5">Swimming Pool</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-desk display-3 mb-3 d-block text-primary"><i class="fa-solid fa-wifi"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Free Wifi</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-exit display-3 mb-3 d-block text-primary"><i class="fa-solid fa-fire-extinguisher"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Fire Exit</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-parking display-3 mb-3 d-block text-primary"><i class="fa-solid fa-square-parking"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Car Parking</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"><i class="fa-solid fa-wind"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Hair Dryer</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-minibar display-3 mb-3 d-block text-primary"><i class="fa-solid fa-champagne-glasses"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Minibar</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-drink display-3 mb-3 d-block text-primary"><i class="fa-solid fa-martini-glass"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Drinks</h2>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="text-center p-4 item">
          <span class="flaticon-cab display-3 mb-3 d-block text-primary"><i class="fa-solid fa-mountain-sun"
              style="color: #ff0000;"></i></span>
          <h2 class="h5">Best View</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- -------what people say-----   -->
  <br>
  <br>
  <div class="container-fluid  block-14 bg-light">
    <h1 class=" text-center " style=" font-family:serif;">What People Say</h1>
    <h4 class=" text-center ">————————</h4>
    <div class="scroller">
      <div class="container  img-list scroller_inner">

        <div class="col text-center m-5 img-circle">
          <img src="img/face1.jpg" class="img-circle" alt="Cinque Terre" width="" height="">
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>

        </div>
        <div class="col text-center m-5">
          <img src="img/face5.jpg" class="img-circle" alt="Cinque Terre" width="" height="">

          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>

        </div>
        <div class="col text-center m-5">
          <img src="img/face7.jpg" class="img-circle" alt="Cinque Terre" width="" height="">
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>

        </div>
        <div class="col text-center m-5">
          <img src="img/face10.jpg" class="img-circle" alt="Cinque Terre" width="" height="">
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>

        </div>
        <div class="col text-center m-5">
          <img src="img/face27.jpg" class="img-circle" alt="Cinque Terre" width="" height="">
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>

        </div>

      </div>

    </div>
  </div>
  <!-- ----------------------------------------Footer--------------------------------------------->
  <div class="bloc1 my-5" style="width: 100%;">

    <footer class="text-center text-lg-start text-white" style="background-color:black; position:relative">

      <div class=" container-fluid p-4 pb-0">

        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                <a class="navbar-brand fw-bold" href="hotel.php">Fu<span style="color: red;">S</span>ion</a>
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">QUICK MENU</h6>
              <p>
                <a href="hotel1.php" class="text-white">Home</a>
              </p>
              <p>
                <a href="room1.php" class="text-white">Rooms</a>
              </p>
              <p>
                <a href="gallery1.php" class="text-white">Gallary</a>
              </p>
              <p>
                <a href="about1.php" class="text-white">About</a>
              </p>
              <p>
                <a href="contact1.php" class="text-white">Contect</a>
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Rajkot,Gujarat,india </p>
              <p><i class="fas fa-envelope mr-3"></i> jenilgajera@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> +91 8780689090</p>
              <p><i class="fas fa-print mr-3"></i> +91 9429032526</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i
                  class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39"
                href="https://www.google.com/search?q=nenis+rudani&rlz=1C1VDKB_enIN1074IN1074&oq=nenis+rudani&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg80gEINDA2N2owajeoAgCwAgA&sourceid=chrome&ie=UTF-8"
                role="button"><i class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac"
                href="https://www.instagram.com/nenisrudani/?igshid=ZGUzMzM3NWJiOQ%3D%3D" role="button"><i
                  class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca"
                href="https://www.linkedin.com/in/nenis-rudani-878845272" role="button"><i
                  class="fab fa-linkedin-in"></i></a>
              <!-- Github -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333"
                href="https://github.com/nenisrudani7" role="button"><i class="fab fa-github"></i></a>
            </div>
          </div>

        </section>

      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright:
        <a class="text-white" href="">BY JNJ Devlopers</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
  <script src="hotel.js"></script>
  <script src="vali.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--  -->

  <script>

  </script>

</body>

</html>