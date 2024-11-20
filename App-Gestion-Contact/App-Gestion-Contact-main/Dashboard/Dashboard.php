<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
<header class="position-sticky top-0 container">
<nav class="navbar navbar-expand-lg navbar-light nav-bg">
    <div class="container-fluid col">
      <div class="logo col-11">
        <a class="navbar-brand text-light" href="../index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-md-row gap-2">
          <li class="nav-item d-flex align-items-center">
            <img src="./Assets/img/avatar (1).svg" alt="" width="50">
            <span class="ms-2"><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?></span>
            <a class="btn btn-primary btn-sm ms-2" href="../login.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>

<main class="d-flex flex-column justify-content-center align-items-center">
    <div class="title mb-5">
        <a class="navbar-brand text-primary" href="./Dashboard.php">
            <span><i class="fas fa-address-book text-primary me-2"></i></span> Dashboard Admin
        </a>
    </div>

    <div class="link mb-5">
        <ul class="d-flex gap-4 list-unstyled">
            <li><button class="btn btn-primary btn-nav btn-sm">Statistics</button></li>

        </ul>
    </div>

    <?php
        include_once("../includes/db.php");
        $con = new DbConnection();
        $result = $con->connection->prepare("SELECT * FROM Contacts");
        $result->execute();
        $contacts = $result->fetchAll();

        $result = $con->connection->prepare("SELECT * FROM Users");
        $result->execute();
        $users = $result->fetchAll();
    ?>

    <div class="container mt-5 statistic">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="stat-card bg-white shadow-sm rounded p-3">
                    <div class="stat-card__content">
                        <h4 class="text-uppercase mb-1">Contacts</h4>
                        <h2><i class="fa fa-address-book"></i> <?php echo count($contacts); ?></h2>
                     
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="stat-card bg-white shadow-sm rounded p-3">
                    <div class="stat-card__content">
                        <h4 class="text-uppercase mb-1">Users</h4>
                        <h2><?php echo count($users); ?></h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</main>

<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
