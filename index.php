<?php

    $insert=false;
    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server, $username, $password);
    
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
    
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql = "INSERT INTO `trip`.`students` (`name`, `age`, `email`, `phone`, `address`, `date_time`) VALUES ('$name', '$age', '$email', '$phone', '$address', current_timestamp());";
    
        if($con->query($sql)==true){
            // echo "Successfully inserted";
            $insert=true;
            header("Location:/php_in_one_video/index.php");
            exit;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    
        $con->close();
    }
    // exit;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> 
    <title>Travel Form</title>
</head>
<body>
    <img id="image" src="./ggsipu.jpg" alt="GGSIPU">
    <div class="container">
        <h1>Welcome to GGSIPU Travel form </h1>
        <p>Enter your details and submit this form to  confirm your participation in trip </p>

        <form action="/php_in_one_video/index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
            <input type="text" name="age" id="age" placeholder="Enter your Age" required>
            <input type="email" name="email" id="email" placeholder="Enter your email, name@example.com" required>
            <input type="tel" name="phone" id="phone" placeholder="Enter your Phone number, +91-XXXXXXXXXX" required>
            <textarea name="address" id="address" cols="30" rows="7" placeholder="Enter your Address" required></textarea>
            <button type="submit" class="btn" onclick="return message();">Submit</button>
        </form>
    </div>
</body>
<script src="./script.js"></script>
</html>