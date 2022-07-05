<?php

    require './database/connection.php';

    if (!empty($_POST)) {
        session_start();

        // Retrieving user
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $user_query = "SELECT * FROM `tbl_users` WHERE `email` = '".$email."'";
        $user_result = $connection->query($user_query);

        

        // Check if any rows returned
        if ($user_result->num_rows > 0) {
            // User exists with email address

            // Create associate array from row
            $user = $user_result->fetch_assoc();

            $passwordHashToMatch = md5($user['salt'].$password);

            if ($passwordHashToMatch === $user['passwordHash'])
             {
                // Valid user
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['fullName'];
                $_SESSION['user_email'] = $user['email'];


                if(isset($_GET['redirect_url']))
                {
                    header('Location: '.$_GET['redirect_url']);
                }
                else
                {
                    header('Location: index.php');
                }

                exit();
            }
             else 
            {
                // Incorrect password
                $_SESSION['error'] = "Ivalid password";
            }
        }
         else 
        {
            // User not available for email address
            $_SESSION['error'] = "User not available for email address";
        }

        mysqli_close($connection);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/singlepage.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Login</h1>
                <p>No Account? <a href="signup.php">Sign up</a></p>
            </div>
            <div class="box">
                <?php
                    if (isset($_SESSION['error']))
                    {
                ?>

                <div class="error">
                        <?php echo $_SESSION['error'] ?>
                </div>

                <?php 
                        unset($_SESSION["error"]);
                    }
                ?>

                <form class="form" method="POST" action="login.php">
                    <input name="email" type="text" class="email" placeholder="E-mail" required>
                    <input name="password" type="password" class="password" placeholder="password" required>
                    <input type="submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
</body>
</html>