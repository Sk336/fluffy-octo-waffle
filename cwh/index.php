<?php
$insert = false;
if(isset($_POST['name'])){
    $server = 'localhost';
    $username = 'root';
    $password = "";

    $con = mysqli_connect($server, $username, $password);


    if(!$con){
        die('connection to this database failed due to'. mysqli_connect_error());
    }
    // echo "success connecting to the db";
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['Email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];



    $sql =  "INSERT INTO `trip`.`trip` ( `Name`, `Age`, `Gender`, `E-mail`, `Phone`,
    `Other`, `DT`) VALUES ('$name', '$age', '$gender', '$email',
    '$phone', '$desc', current_timestamp());";
    // echo $sql;


    if($con->query($sql)==true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else
    {
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles4.css">
  </head>
  <body>
    <img src="bg.jpg" class="bg" alt="College" />
    <div class="container">
      <h3>Welcome to IIT Kharagpur US Trip Form</h3>
      <p class= 'submitMsg'>
        Enter your details and Submit Form to confirm your participation in the
        group
      </p>
      <br />
    <?php
      if($insert == true){
        echo "<p>
        Thanks for submiting your form. we are happy to see you joining them
      </p>";
    
    }
      
    ?>

      <form action="index.php" method="POST">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="email"
          name="Email"
          id="Email"
          placeholder="Enter Your Email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter your Phone"
        />
        <textarea
          name="desc"
          id="desc"
          col
          s="30"
          rows="10"
          placeholder="Enter your Some information here"
        ></textarea>
        <button type="submit" class="btn">Submit</button>
        <!-- <button type="reset" class="btn">Reset</button> -->
      </form>
    </div>
    <script src="index2.js"></script>
   
  </body>
</html>





















































