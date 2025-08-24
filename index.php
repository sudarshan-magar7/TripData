<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";


$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection failed".mysqli_connect());
}

// echo"connection succeffuly..";

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name','$age','$gender','$email','$phone','$desc', current_timestamp());";

if($con->query($sql)==true){
    // echo"Inserted Succesfuly";
    $insert=true;

}else{
    echo"Error:$sql<br>$con->error";
}
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sriracha&display=swap" rel="stylesheet">
    <title>TripData</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img class="bg" src="bg3.jpg" alt="New Time Squere">
    <div class="container">
        <h3>
            Welcome To US Trip Form
        </h3>
        <p>
            Enter you details and Confirm US trip.
        </p>
        <?php
        if($insert==true){
            echo '<p class="submiting">Thansk for sumiting form.we are happy to joing us.</p>';
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea type="desc" name="desc" id="desc" cols="25" rows="10" placeholder="Enter Your Information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button  class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>