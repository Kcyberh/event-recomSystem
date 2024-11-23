<?php 
require_once './conn.php';
require_once './send_email.php';

if (isset($_POST['submit'])){
    // print_r($_POST);

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $skill = $_POST['skill'];

    $query = "INSERT INTO admin (name,email,phone,skill) VALUES (:name,:email,:phone,:skill)";
    $stmt = $conn -> prepare($query);
    $stmt -> bindParam(":name",$name);
    $stmt -> bindParam(":email",$email);
    $stmt -> bindParam(":phone",$phone);
    $stmt -> bindParam(":skill",$skill);

    $stmt -> execute();

    sendRecommendationEmail($name,$phone,$skill,$email);
     // Redirect to avoid resubmission on refresh
     //header("Location: " . $_SERVER['PHP_SELF']);
     echo "
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script>
         Swal.fire({
             title: 'Success!',
             text: 'Data inserted successfully.',
             icon: 'success',
             confirmButtonText: 'OK'
         })
     </script>
     ";
    exit();
}