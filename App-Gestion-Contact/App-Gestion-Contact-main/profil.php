<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="./Assets/img/profile.svg">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
    <?php session_start(); ?>

    <!-- Header Section -->
    <header class="container-fluid bg-dark text-light py-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <i class="fas fa-address-book me-2"></i>Contacts
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <span class="nav-link">
                                <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>
                            </span>
                        </li>
                        <li class="nav-item">
                            <img src="./Assets/img/avatar (1).svg" alt="Avatar" class="rounded-circle" width="40">
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light ms-2" href="./includes/main.php?Logout=true">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 shadow rounded p-4 bg-white">
                <div class="text-center">
                    <h2>Welcome, <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>!</h2>
                    <img src="./Assets/img/avatar (1).svg" alt="Avatar" class="rounded-circle mt-3 mb-4" width="150">
                </div>
                <div class="mb-4">
                    <h4 class="text-center">Your Profile</h4>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Username</th>
                                <td><?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?></td>
                            </tr>
                            <tr>
                                <th>Sign-up Date</th>
                                <td><?php if (isset($_SESSION['SignDate'])) echo $_SESSION['SignDate']; ?></td>
                            </tr>
                            <tr>
                                <th>Last Login</th>
                                <td><?php if (isset($_SESSION['date'])) echo $_SESSION['date']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary me-2" href="http://localhost/App-Gestion-Contact/App-Gestion-Contact-main/Dashboard/Dashboard.php">Dashboard</a>
                    <a class="btn btn-primary me-2" href="./listcontacts.php">Contacts</a>
                    <a class="btn btn-secondary" href="./includes/main.php?Logout=true">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p>&copy; 2024 Contacts. Hamza Rouissi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
