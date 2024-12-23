<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact list</title>
    <link rel="icon" href="./Assets/img/contact-list.svg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
<?php session_start();?>
<header class="position-sticky top-0 container">
    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
        <div class="container-fluid col">
          <div class="logo col-11">
            <a class="navbar-brand text-light" href="./index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-md-row gap-2">
              <li class="nav-item d-flex align-items-center">
                <img src="./Assets/img/avatar (1).svg" alt="" width="50">
                <span class="ms-2"><?php if(isset($_SESSION)){ echo $_SESSION['username']; }?></span>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
</header>
    <main class="d-flex flex-column">
        <div class="shadow p-3 mb-5 bg-body rounded w-100 container mt-5">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold h5">Contacts list</p>
    
                <!-- Button trigger modal -->
                <div class="position-sticky top-0">
                    <span>
                        <i class="fas fa-search"></i>
                    </span>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Contact
                    </button>   
                </div>
                
                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="p-3" id="formAdd" method="POST" action="./includes/main.php">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-3 d-flex gap-4">
                                  <div class="name">
                                    <label for="name" class="form-label">Name</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Name" type="text" class="form-control" id="name" aria-describedby="emailHelp" name="Name">
                                  </div>
                                  <div class="phone">
                                    <label for="phone" class="form-label">Phone</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Phone" type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="Phone">
                                  </div>
                                </div>
                                <div class="mb-3">
    <label for="email" class="form-label">Email</label> 
    <span class="valid text-danger"></span>  
    <input placeholder="Enter Email" type="text" class="form-control" id="email" name="Email">
</div>

                                <p class="valid text-danger"></p>
                                <div class="mb-3">
                                    <label for="adresse" class="form-label">Adresse</label> <span class="valid text-danger"></span>
                                    <textarea class="form-control" name="Adresse" id="adresse" cols="10" rows="3" placeholder="Enter Adresse" id="Adresse"></textarea>
                                  </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Age" type="number" class="form-control" id="age" name="Age">
                                  </div>
                                  <div class="mb-3">
                                    <label for="country" class="form-label">Country</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Country" type="text" class="form-control" id="country" name="Country">
                                  </div>
                                <div class="button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submitContact" class="btn btn-primary">Save</button>
                                </div>
                              </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        <div class="table-responsive overflow-scroll vh-100">
        <table class="table" id="contactTable">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Tel</th>
      <th scope="col">E-mail</th>
      <th scope="col">Adresse</th>
      <th scope="col">Age</th>
      <th scope="col">Country</th>
      <th scope="col">Actions</th> <!-- Ensure this matches with the body columns -->
    </tr>
  </thead>
  <tbody>
    <?php 
    include_once('./includes/db.php');
    include_once('./includes/contact.php');

    $info = Contact::View(0);
    foreach($info as $value): ?>
    <tr class="bg-blue">
        <td class="pt-2">
            <img src="./Assets/img/contacts.svg" class="rounded-circle img-list" alt="">
            <div class="pl-lg-5 pl-md-3 pl-1 name"><?php echo $value['Name']?></div>
        </td>
        <td class="pt-3 mt-1"><?php echo $value['Phone']?></td>
        <td class="pt-3"><?php echo $value['Email']?></td>
        <td class="pt-3"><?php echo $value['Adresse']?></td>
        <td class="pt-3"><?php echo $value['Age']?></td>
        <td class="pt-3"><?php echo $value['Country']?></td>
        <td class="pt-3">
            <a class="text-success" href="./update.php?Id=<?php echo $value['IdContact']?>"><i class="fas fa-user-edit h5" id="update"></i></a>
            <a class="text-danger btnDelete"><span class="idContact d-none"><?php echo $value['IdContact'];?></span><i class="fas fa-user-times h5" data-bs-toggle="modal" data-bs-target="#exampleModal2"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </main>

    <!-- Modal delete -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"> if you delete
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" id="btnConfirm" class="btn btn-danger">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <script src="./Js/contacts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactTable').DataTable({
                "searching": true,
                "paging": true,
                "ordering": true,
                "info": true
            });
            
        });
    </script>
</body>
</html>
