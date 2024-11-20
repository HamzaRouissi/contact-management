<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./Assets/img/loginicon.svg">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
    <?php include_once "./includes/header.php"; ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row shadow p-4 bg-white rounded w-100 w-md-75">
            <!-- Illustration Section -->
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
                <img src="./Assets/img/login.svg" alt="Login Illustration" class="img-fluid" style="max-width: 80%;">
            </div>
            
            <!-- Login Form Section -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <form action="./includes/main.php" method="POST" id="login">
                    <h4 class="text-center mb-4">Login</h4>
                    
                    <!-- Error Message -->
                    <?php if (isset($_GET['error'])): ?>
                        <p class="alert alert-danger text-center">Username or password not correct</p>
                    <?php endif; ?>

                    <!-- Username Field -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Enter your username" name="username" id="username" required>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Enter your password" name="pass" id="pass" required>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="check">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="submitLogin" class="btn btn-primary w-100">Login <i class="fas fa-sign-in-alt"></i></button>


                   
                </form>
            </div>
        </div>
    </div>

    <!-- Validation Script -->
    <script src="./Js/loginvalidation.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
