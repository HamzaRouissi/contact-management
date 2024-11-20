<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" href="./Assets/img/icon-contact.png">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./Css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
  <?php include_once "./includes/header.php"; ?>
  
  <main class="d-flex align-items-center justify-content-center vh-100 bg-light">
      <div class="acceuil container text-center text-md-start d-flex flex-column flex-md-row align-items-center gap-4">
          <!-- Text Section -->
          <div class="bienvenu d-flex flex-column align-items-start gap-3">
              <h1 class="display-4 fw-bold">Application de Gestion des Contacts</h1>
              <p class="lead">
                  Notre application de gestion de contacts offre une interface sécurisée et conviviale permettant 
                  aux utilisateurs de gérer efficacement leurs listes de contacts. Avec des fonctionnalités complètes de création, 
                  lecture, mise à jour et suppression (CRUD), cette application garantit une gestion fluide et organisée des informations.
              </p>
          </div>

          <!-- Illustration -->
          <div>
              <img src="./Assets/img/undraw_personal_email_re_4lx7.svg" alt="Illustration Contact Management" class="img-fluid" style="max-width: 400px;">
          </div>
      </div>
  </main>

  <footer class="bg-dark text-white py-3 text-center">
      <p class="mb-0">© 2024 - Par Hamza Rouissi</p>
  </footer>

  <!-- Custom Scripts -->
  <script src="./Js/main.js"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
