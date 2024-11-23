
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login and Sign Up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
      <!-- SweetAlert2 CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
   </head>
    <body>
   <div class="container">
   <a href="../home.php">
    <button type="button" class="btn">
    Home</button></a> 
   </div>
        <div class="form-container" id="signup">
            <h1>Create Account</h1>
            <form action="signin.php" method="POST" class="signup-form">
                <div class="input-group">
                    <label for="signup-name">Full Name</label>
                    <input type="text" id="signup-name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" name="password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p>Already have an account? <a href="log.php">Login</a></p>
            </form>
        </div>
    </div>
    </body>
</html>