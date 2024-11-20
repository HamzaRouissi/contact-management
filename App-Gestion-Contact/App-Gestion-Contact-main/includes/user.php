<?php
session_start();

class User extends DbConnection {
    public string $Username;
    public string $Password;
    public string $DateSign;

    function Login($UserName, $Password) {
        $this->Username = $UserName;
        $this->Password = $Password;

        $requete = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statment = $this->connection->prepare($requete);
        $statment->bindParam(':username', $this->Username);
        $statment->bindParam(':password', $this->Password);
        $statment->execute();
        $result = $statment->fetch();

        if ($result && $result['Username'] === $this->Username && $result['Password'] === $this->Password) {
            $_SESSION['username'] = $result['Username'];
            $_SESSION['password'] = $result['Password'];
            $_SESSION['IdUser'] = $result['IdUser'];
            $_SESSION['SignDate'] = $result['SignDate'];
            date_default_timezone_set('Africa/Tunisia');
            $_SESSION['date'] = date('Y/m/d H:i:s');

            if (isset($_POST['check'])) {
                setcookie('username', $_SESSION['username'], time() + 3600);
                setcookie('password', $_SESSION['password'], time() + 3600);
            }

            if ($result['Role'] === "Admin") {
                header("location:../Dashboard/Dashboard.php");
            } else {
                header("location:../profil.php");
            }
        } else {
            header("location:../login.php?error=email or password not found");
        }
    }

  

    function Logout() {
        session_unset();
        session_destroy();
        header("location:../login.php");
    }
}
 
?>