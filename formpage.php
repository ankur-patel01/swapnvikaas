<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .list-group-item {
      background-color: #03ffaa30;
    }
  </style>
</head>

<body style="background-image: url(rene-bernal-f0rdHx5P8sQ-unsplash.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    background-position: center;">

  <div class="card" style="width: 100%">
    <div class="card-body" style="
          font-family: 'Architects Daughter', cursive;
          font-weight: bolder;
          font-size: xxx-large;
          color: darkorchid;
            background-image: url('rene-bernal-f0rdHx5P8sQ-unsplash.jpg');
        ">
      <div class="card-title">SWAPN VIKAAS FOUNDATION</div>
      <h5 class="card-subtitle mb-2 text-white">
        “Service to others is the rent you pay for your room here on earth.”
        <strong>Mohammed Ali</strong>
      </h5>
    </div>
  </div>
  </div>

  <nav class="navbar sticky-top navbar-expand-lg  bg-secondary text-white" style="font-family: 'Spartan', sans-serif">
    <div class="container-fluid ">
      <a class="text-white  navbar-brand" href="#">SwapnVikaas</a>
      <button class=" bg-light white navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi"
            fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
            </path>
          </svg></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="text-white nav-link active" aria-current="page" href="index.html">Home</a>
          </li>

      </div>
  </nav>


  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="heart.png" alt="" width="72" height="57">
    <h1 style="letter-spacing:4px"><strong>“Every penny will help.”</strong></h1>
    <h3 class="lead text-white"><strong>“Thank you for your thoughtful donation to the Swapn Vikaas Foundation. Your
        donation will make sure that all needy ones in our county will get food, clothes, shelter, education, abd good
        environment”</strong></h3>
  </div>
  <div class="contain" style="display:flex;align-items:center;justify-content:center">

    <div class="card p-3 " style="background-color:#4c008b75 ;width: 40rem;margin-bottom:2rem">
      <ul class="list-group list-group-flush">

        <form class="text-white" method="post" action="pgRedirect.php">
          <div class="mb-3">
            <label for="namee" class="form-label"><i class="fa fa-user"></i>Full Name</label>
            <li class="list-group-item"><input type="text" name="namee" class="form-control" id="namee" required>
            </li>
          </div></br>
          <div class="mb-3">
            <label for="mobile" class="form-label"><i class="fa fa-address-card-o"></i>Mobile Number</label>
            <li class="list-group-item"><input type="text" name="mobile" class="form-control" id="mobile" required></li>
          </div></br>
          <div class="mb-3">
            <label for="email" class="form-label"><i class="fa fa-envelope"></i>Email address</label>
            <li class="list-group-item"><input type="email" class="form-control" id="email"
                aria-describedby="emailHelp"></li>
          </div></br>
          <div class="mb-3">
            <label for="Message" class="form-label">Brief Message for our Foundation</label>
            <li class="list-group-item"><input type="textarea" name="message" class="form-control" id="message"></li>
          </div></br>
          <div class="mb-3">
            <label for="amount" class="form-label">Donation Amount(INR)</label>
            <li class="list-group-item"><input type="number" title="TXN_AMOUNT" min="0.01" step=".01" tabindex="10"
                name="TXN_AMOUNT" value="1" class="form-control" id="amount"></li>
          </div></br>

          <input id="ORDER_ID" type="hidden" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS".rand(10000, 99999999) ?>">
          <input id="CUST_ID" type="hidden" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"
            value="CUST001">
          <input id="INDUSTRY_TYPE_ID" type="hidden" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
            autocomplete="off" value="Retail">
          <input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
            autocomplete="off" value="WEB">
          <button value="CheckOut" type="submit" onclick="" class="w-100 btn btn-primary">Next</button>
    </div>
    </form>
  </div>
  </ul>
  </div>
  </div>
  </div>

  <footer class="bg-dark footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-white">All Rights reserved by Swapn Vikaas Foundation</span>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>