<?php
    class Contact extends DbConnection{
        public $Name;
        public $Phone;
        public $Email;
        public $Adresse;
        public $Age;       
        public $Country;    

        function Create($Name, $Phone, $Email, $Adresse, $Age, $Country){
            // Assigning the method arguments to class properties

            $this->Name = $Name;
            $this->Phone = $Phone;
            $this->Email = $Email;
            $this->Adresse = $Adresse;
            $this->Age = $Age;
            $this->Country = $Country;
             // Retrieving the user ID from the session
            $IdUser = $_SESSION['IdUser'];

            // Using a prepared statement to insert data into the Contacts table.
    // '?' placeholders are used to avoid directly including user input in the query.
            $requete = $this->connection->prepare("INSERT INTO Contacts (Name, Phone, Email, Adresse, Age, Country, FkUser) 
            VALUES (?, ?, ?, ?, ?, ?, ?)");

            // Binding the values to the placeholders. This prevents SQL injection by escaping special characters.

            $requete->execute([$this->Name, $this->Phone, $this->Email, $this->Adresse, $this->Age, $this->Country, $IdUser]);
            header("location:../listcontacts.php");
        }
        
      function Update($Name, $Phone, $Email, $Adresse, $Age, $Country, $id){
    // Prepared statement to update the Contacts table
    $requete = $this->connection->prepare("UPDATE Contacts 
        SET 
        Name = ?,       
        Phone = ?,      
        Email = ?,      
        Adresse = ?,    
        Age = ?,       
        Country = ?     
        WHERE IdContact = ?"); 

    // Executing the prepared statement with bound values
    $requete->execute([
        $Name,   
        $Phone,   
        $Email,    
        $Adresse, 
        $Age,      
        $Country, 
        $id        
    ]);
 
    header("location:../listcontacts.php");
}

function Delete($id){
    // Prepared statement to delete a record from the Contacts table
    $stmt = $this->connection->prepare("DELETE FROM Contacts WHERE IdContact = ?");

    // Binding the contact ID to prevent SQL injection
    $stmt->execute([$id]);

    // Redirecting to the contacts list page after a successful deletion
    header("location:../listcontacts.php");
}

        static function View($id){
            $con = new DbConnection();
            if($id === 0){
                $IdUser = $_SESSION['IdUser'];
                $result = $con->connection->query("SELECT * FROM Contacts WHERE FkUser = $IdUser");
                $info = $result->fetchAll();
            } else {
                $IdUser = $_SESSION['IdUser'];
                $result = $con->connection->query("SELECT * FROM Contacts WHERE IdContact = $id");
                $info = $result->fetch();
            }
            return $info;
        }
    }
?>
