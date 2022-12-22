<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $mobile= $_POST['mobile'];
    $email= $_POST['email'];
    $address= $_POST['address'];

    $sql="INSERT INTO `gym`.`members` (`Name`, `Age`, `Gender`, `Mobile`, `Email`, `Address`, `Dt`) VALUES ('$name', '$age', '$gender', '$mobile', '$email', '$address', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        echo "Successfully inserted";
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayan Fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <style>
        
        body{
            font-family: 'Raleway', sans-serif;
            
            color: white;
            background: url('bg.jpg');
            

            
        }
        .left{
            font-family: 'Raleway', sans-serif;
            position: absolute;
            left: 34px;
            top: 20px;
            display:inline-block;
            /* border: 2px solid red; */
        }
        .mid{
            font-family: 'Raleway', sans-serif;
            display:block;
            margin: 20px auto;
            width: 33%;
            /* border: 2px solid green; */
        }
        .right{
            font-family: 'Raleway', sans-serif;
            position: absolute;
            right: 34px;
            top: 20px;
            display:inline-block;
            /* border: 2px solid yellow; */
        }
        .navbar{

        }
        .navbar li{
            font-family: 'Raleway', sans-serif;
            display: inline-block;
            font-size: 25px;
        }
        .navbar li a{
            font-family: 'Raleway', sans-serif;
            color: white;
            text-decoration: none;
            padding: 34px 23px;
        }
        .navbar li a:hover, .navbar li a.active{
            text-decoration: underline;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: rgb(38, 184, 33);
        }
        .left img{
            width: 100px;
            filter: invert(100%);
            padding: 0px 18px;
        }
        .left div{
            font-family: 'Raleway', sans-serif;
            text-align: center;
            line-height: 60px;
            font-size: 26px;
        }
        .btn{
            font-family: 'Raleway', sans-serif;
            margin: 0px 9px;
            padding: 2px 4px;
            background-color: black;
            color: white;
            font-size: 25px;
            cursor: pointer;
        }
        .btn:hover{
            color: burlywood;
        }
        .container{
            font-family: 'Raleway', sans-serif;
            /* border: 2px solid white; */
            margin: 160px 80px;
            padding: 50px 57px;
            width: 30%;
            border-radius: 28px;
        }
        .container h1{
            font-family: 'Raleway', sans-serif;
            text-align: center;
            font-size: 48px;
        }
        .formgroup input{
            font-family: 'Raleway', sans-serif;
            display: block;
            /* border: 2px solid white; */
            margin: 22px auto;
            padding: 10px 20px;
            font-size: 33px;
            width: 508px;
            border-radius: 34px;
        }
        .container button{
            font-family: 'Raleway', sans-serif;
            display: block;
            width: 183px;
            margin: 51px 258px;
            font-size: 38px;
            border-radius: 28px;
            background-color: #f60b0b;
            color: #06f906;
        }
        #saya{
            font-family: 'Raleway', sans-serif;
            /* border: 2px solid white; */
            margin: 22px auto;
            padding: 10px 20px;
            font-size: 33px;
            width: 508px;
            border-radius: 34px;
            background-color: white;
            color: grey;
        }
        select{
            font-family: 'Raleway', sans-serif;
            font-size: 32px;
            color: grey;
            border: 2px solid grey;
            border-radius: 32px
        }
        .right input{
            font-size: 28px;
        }
        
    </style>
</head>
<body>
    
    <header>
        <div class="left">
            <img src="logo.png" alt="">
            <div>
                SAYAN Fitness
            </div>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">about Us</a></li>
                <li><a href="#">Fitness Calculator</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="right">
            <input type="text" name="" placeholder="Search Here">
        </div>

    </header>

    <div class="container">
        <h1>Join The Best Gym in Kolkata</h1>
        <form action="gym.php" method="post">
            <div class="formgroup">
                <input type="text" name="name" placeholder="Enter Your Name">
            </div>
            <div class="formgroup">
                <input type="text" name="age" placeholder="Enter Your Age">
            </div>
            <div class="formgroup" id="saya">
                Gender : <select name="gender" >
                    <option value="select" selected>Select</option>
                    <option value="male" >Male</option>
                    <option value="FEmale" >Female</option>
                </select>
            </div>
            <div class="formgroup">
                <input type="text" name="mobile" placeholder="Enter Your Mobile No.">
            </div>
            <div class="formgroup">
                <input type="text" name="email" placeholder="Enter Your Email Id">
            </div>
            <div class="formgroup">
                <input type="text" name="address" placeholder="Enter Your Locality">
            </div>
            <button class="btn">Register</button>
        </form>
    </div>
</body>
</html>




<!-- INSERT INTO `members` (`SL`, `Name`, `Age`, `Gender`, `Mobile`, `Email`, `Address`, `Dt`) VALUES ('1', 'Sayan', '20', 'Male', '1234567890', 'sayan@gm.com', 'Bangalore', current_timestamp()); -->