<?php
    include_once('./db.php');
    include_once('./user.php');
    include_once('./contact.php');

    // session_start();
    if(isset($_POST['submitSign'])){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['pass'];
        date_default_timezone_set('africa/Tunisia');
        $_SESSION['SignDate'] = date('Y/m/d H:i:s A');
        $user = new user();
        $user->Register($_SESSION['username'], $_SESSION['password'], $_SESSION['SignDate']);
    }

    if(isset($_POST['submitLogin'])){
        $user = new user();
        $user->login($_POST['username'], $_POST['pass']);   
    }
    // Handling the contact creation
    if(isset($_POST['submitContact'])){
        $Name = $_POST['Name'];
        $Phone = $_POST['Phone'];
        $Email = $_POST['Email'];
        $Adresse = $_POST['Adresse'];
        $Age = $_POST['Age'];            
        $Country = $_POST['Country'];     
        $contact = new Contact();
        $contact->Create($Name, $Phone, $Email, $Adresse, $Age, $Country);  
        var_dump($contact);
    }

    // Handling the contact update

    if(isset($_POST['submitUpdate'])){
        $id = $_SESSION['Id'];
        $Name = $_POST['Name'];
        $Phone = $_POST['Phone'];
        $Email = $_POST['Email'];
        $Adresse = $_POST['Adresse'];
        $Age = $_POST['Age'];             
        $Country = $_POST['Country'];     
        $contact = new Contact();
        $contact->Update($Name, $Phone, $Email, $Adresse, $Age, $Country, $id);  
        var_dump($contact);
    }
    // Handling the contact deletion

    if(isset($_GET['Id'])){
        $id = $_GET['Id'];
        $contact = new Contact();
        $contact->Delete($id);  
    }

   
    if(isset($_GET['Logout'])){
        $contact = new User();
        $contact->Logout(); 
    }
?>
