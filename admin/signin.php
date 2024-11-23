<?php 
require_once "../includes/conn.php";

//$_POST['submit'];
   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Corrected SQL query
        $query = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
       
        // SweetAlert Success Notification
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                title: 'Success!',
                text: 'Your account has been created successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../home.php';
            });
        </script>
        ";
   exit();


?>