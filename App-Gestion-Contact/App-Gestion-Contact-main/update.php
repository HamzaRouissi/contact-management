<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
    <link rel="icon" href="./Assets/img/contact-list.svg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
<?php 
    session_start();
    $_SESSION['Id'] = $_GET['Id'];
    include_once('./includes/db.php');
    include_once('./includes/contact.php');
    $info = Contact::View($_SESSION['Id']);
?>
<header class="position-sticky top-0 container">
    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
        <div class="container-fluid col">
          <div class="logo col-11">
            <a class="navbar-brand text-light" href="./index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-md-row gap-2">
              <li class="nav-item d-flex align-items-center">
                <img src="./Assets/img/avatar (1).svg" alt="" width="50">
                <span class="ms-2"><?php echo $_SESSION['username']; ?></span>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>

<main class="d-flex flex-column container mt-5">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <h5 class="text-center font-weight-bold">Update Contact</h5>
        <form method="POST" action="./includes/main.php" class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="Name" value="<?php echo $info['Name']; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="Phone" value="<?php echo $info['Phone']; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="Email" value="<?php echo $info['Email']; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="adresse" class="form-label">Address</label>
                <textarea class="form-control" name="Adresse" id="adresse" rows="3" required><?php echo $info['Adresse']; ?></textarea>
            </div>
            <div class="col-12 d-flex justify-content-between">
                <a href="./listcontacts.php" class="btn btn-secondary">Cancel</a>
                <button type="submit" name="submitUpdate" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <div class="text-center d-none d-lg-block">
        <img src="./Assets/img/update.svg" alt="update" width="400">
    </div>
</main>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./Js/contacts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
