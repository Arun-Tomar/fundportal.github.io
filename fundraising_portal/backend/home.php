<?php
session_start();

if (!isset($_SESSION['username'])) {
  echo "you are logged out";
  header('location:login.php');
}


$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

if (isset(($_SESSION['username']))) {
  $display = $_SESSION['username'];


  $con = mysqli_connect($server, $user, $password, $db);
  $select_query = "SELECT username,email,mobile FROM registration WHERE username='$display'";
  $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

  $result = $select_query_result->fetch_assoc();

  $username = $result['username'];
  $email = $result['email'];
  $mobile = $result['mobile'];
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile of Donor!</title>

  <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
    <div class="container-fluid">
      <a class="navbar-brand d-flex flex-grow-1" href="#">
        <img src="images/logo.png" width=50px id="image">Samagra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse extreme-right" id="navbarSupportedContent">
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <div class="contact_btn">
              <a href="logout.php">Logout</a>
            </div>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Home/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="donate1.html">NGO Listings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../admin/index.php">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- backgroound starts -->
  <div id="background-image">
    <div class="container-fluid bg-overlay text-center">
      <div class="row px-5 col-12 col-sm-8 col-md-6 text-start bg-content">
        <h1 class="mb-3 fw-bolder">Helps People Life And Their Formation</h1>
        <h4>See our latest campaign, and if can you please donate a
          small part but its significance for us to help people</h4>
        <button type="button" class="btn btn-lg btn-dark text-white fw-bold w-auto mt-5"> <a href="donate1.html">Donate Now</a></button>
      </div>
    </div>
  </div>
  <!-- backgroound ends -->


  <!-- Donor info section starts -->
  <div class="container mt-5 pt-5 donor-info">
    <div class="main-body">
      <h2 class="fw-bold text-center pt-5 pb-5">Personal Details</h2>
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3 card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="images/avatar.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <?php echo  $_SESSION['username']; ?>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block"> update profile </button>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo  $_SESSION['username']; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <div class="input-group">
                    <span><?php echo  $email; ?></span>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <div class="input-group">
                    <span><?php echo  $mobile; ?></span>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Adress of the user_name
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Donor info section ends -->

  <!-- Activity Section Starts -->
  <section class="activity pb-5" id="activity">
    <h2 class="fw-bold text-center text-white p-5">Activity</h2>
    <div class="container">
      <div class="card text-center w-75 m-auto my-4">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Name of the initiative</h5>
          <p class="card-text">Samagra is proud, <?php echo $username; ?> donated Rs. amount/- for the initiative.</p>
          <a href="#" class="btn btn-primary">Praise <?php echo $username; ?></a>
        </div>
        <div class="card-footer text-muted">
          day/date, etc
        </div>
      </div>
      <div class="card text-center w-75 m-auto my-4">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Name of the initiative</h5>
          <p class="card-text">Samagra is proud, user_name donated Rs. amount/- for the initiative.</p>
          <a href="#" class="btn btn-primary">Praise user_name</a>
        </div>
        <div class="card-footer text-muted">
          day/date, etc
        </div>
      </div>
    </div>
  </section>
  <!-- Activity Section Ends -->

  <!-- Footer Starts -->
  <footer></footer>
  <!-- Footer Ends -->

  <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>