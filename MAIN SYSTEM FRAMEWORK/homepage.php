<?php
include "session.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Main Page</title>
  <script type="text/javascript">
    function preventback(){window.history.forward()};
    setTimeout("preventback()",0);
    window.onunload=function(){null;}
  </script>
</head>

<body>

  <!--navbar-->
  <script >
        function myFunction() {
            if(!confirm("Logout?"))
            {
                return false;
            }
        }
    </script>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="homepage.php">Main Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../LOGINSYSTEM/logout.php" onclick='return myFunction()'>Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!--main page-->
  <div class="container my-4">
    <h1 class="text-center">Welcome to our Main Page😊</h1>
  </div>
  <div class='container'>
    <div class='row'>
      <div class='col-4'>
        <div class="card" style="width: 18rem;">
          <img src="IMAGES/viewimg.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">View Data</h5>
            <p class="card-text">To view product details </p>
            <a href="PARTIALS/_viewproduct.php" class="btn btn-primary">Go Here</a>
            <p class="card-text">To view profit made </p>
            <a href="profitproduct.php" class="btn btn-primary">Go Here</a>
          </div>
        </div>
      </div>
      <div class='col-sm-4'>
        <div class="card" style="width: 18rem;">
          <img src="IMAGES/editimg.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Edit Data</h5>
            <p class="card-text">To add a new product</p>
            <a href="addproduct.php" class="btn btn-primary">Go Here</a>
            <p class="card-text">To edit/delete existing product details</p>
            <a href="PARTIALS/_editproduct1.php" class="btn btn-primary">Go Here</a>
          </div>
        </div>
      </div>
      <div class='col-sm-4'>
        <div class="card" style="width: 18rem;">
          <img src="IMAGES/bill.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bill Generation</h5>
            <p class="card-text">To generate a bill for the customer</p>
            <a href="generatebill.php" class="btn btn-primary">Go Here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>