<?php

require './database/connection.php';

if (!empty($_POST))
{
    	//Hashing password
        $salt = base64_encode(random_bytes(10));
        $passwordHash = md5($salt.$_POST['password']);

        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];

        $query = "INSERT INTO `tbl_users` (`fullName`, `email`, `phoneNumber`, `salt`, `passwordHash`) VALUES ('".$fullName."', '".$email."', '".$phoneNumber."', '".$salt."', '".$passwordHash."')";
        
        mysqli_query($connection, $query);

        mysqli_close($connection);

        header('Location: login.php');
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/singlepage.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Signup</h1>
                <p>Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <form class="form" method="POST" action="signup.php">
                    <input name="fullName" type="text" class="fullname" placeholder="Full Name" required>
                    <input name="email" type="email" class="email" placeholder="someone@abc.com" required>
                    <input name="phoneNumber" type="text" class="Phonenumber" placeholder="Phonenumber" required>
                    <input name="password" type="password" class="password" placeholder="Password" required>
					<input type="submit" class="button" value="Signup">
                </form>
            </div>
        </div>
    </main>
</body>
</html>

