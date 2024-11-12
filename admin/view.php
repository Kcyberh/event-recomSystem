<?php 
require_once "../includes/conn.php";

$query = "SELECT * FROM  admin";
$stmt = $conn -> prepare($query);
$stmt -> execute();
$results = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/styleindex.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

/* Navigation Styles */
nav {
    background-color: #333;
    padding: 15px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    display: inline;
    padding: 0 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

nav ul li a:hover {
    color: #ff9900;
}

/* Main Title */
.title-text {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-top: 20px;
}

/* Form Styles */
form.body {
    width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

form.body label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

form.body input[type="text"], form.body input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form.body input[type="submit"] {
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form.body input[type="submit"]:hover {
    background-color: #ff9900;
}

/* Product List Styles */
div {
    margin: 30px auto;
    width: 80%;
}

table.body {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

table.body thead {
    background-color: #333;
    color: #fff;
}

table.body th, table.body td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

table.body tr:hover {
    background-color: #f1f1f1;
}

table.body th {
    text-transform: uppercase;
    font-weight: bold;
}
    </style>
    </head>
    
    <body>
    <nav>
        <ul>
            <li>
                <a href="../home.php">Home</a>
            </li>
            |
            <li>
                <a href="../index.php">Recommend</a>
            </li>
        </ul>
    </nav>

   
    


    <div>
        <h1 class="title-text">List of Recommendation</h1>
        <table class="body">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Skill</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $id = 1;
                foreach ($results as $recom){
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $recom['name'] ?></td>
                    <td><?php echo $recom['phone'] ?></td>
                    <td><?php echo $recom['email'] ?></td>
                    <td><?php echo $recom['skill'] ?></td>
                </tr>
                <?php $id++;} ?>
            </tbody>
        </table>
    </div>
        
    </body>
</html>