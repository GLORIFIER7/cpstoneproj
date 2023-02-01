
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./components/css/bootstrap.css" />
    <link rel="stylesheet" href="./components/css/datatables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./components/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    

          
    <title>Document</title>
    </head>
    <body>

<!-- Navbar Start here -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!-- Offcanvas Trigger starts here -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                </button>
            <!-- Offcanvas Trigger ends here -->
          <a class="navbar-brand fw-bold text-uppercase me-auto" href="dashboard.php"> Company Name </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <div class="d-flex ms-auto mt-2">
              <div class="input-group my-3 my-lg-0">

<!-- for username -->
           

                <!-- <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell-fill" style="font-size: 16px;"></i> -->
                    <!-- <img src="./images/user.jpg" style="width: 50px; height: 50px; border-radius: 50%;"  alt="users"> -->
                <!-- </a> -->
                <!-- <input type="text" name="" id="" class="form-control" />
                <button class="btn btn-primary" type="button" id="button-addon2"> <i class="bi bi-search"></i> </button> -->
              </div>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0">
            <!-- <li class="text-white">test</li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <i class="bi bi-person-fill"></i> -->
                        <img src="./images/user.jpg" style="width: 42px; height: 42px; border-radius: 50%;"  alt="users">
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                    </ul>
                  </li>
            </ul>

            
          </div>
        </div>
      </nav>    



    <!-- Navbar Ends here -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
<script src="components/js/bootstrap.bundle.min.js"></script>
<script src="components/js/jquery-3.6.0.js"></script>
<script src="components/js/jquery.dataTables.min.js"></script>
<script src="components/js/dataTables.bootstrap5.min.js"></script>
<script src="components/js/script.js"></script>