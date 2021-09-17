<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = strip($_POST["username"]);
	    $password = strip($_POST["password"]);
        $conn = new mysqli("localhost", "root", "", "portfolio");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT 'name', 'username', 'password' FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        // The query always returns 1 result, given that the credentials provided are correct (username is unique for all users).
        if ($result->num_rows == 1) {
            $_SESSION["logged-in"] = true;
            $_SESSION["logged-in-notification"] = true;
            header("Location: index.php");
        }
        else {
            $error = "Your login credentials are incorrect.";
        }
    }

    function strip($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yasir M Dahir - Login</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    </head>
    <body>
        <main>
            <nav class='navbar'>
                <ul>
                    <li><a href="javascript:history.go(-1)"><i class="fas fa-arrow-circle-left fa-2x"></i></a></li>
                    <li>Yasir M Dahir</li>
                </ul>
            </nav>
            <div class=image-container>
                <?php
                echo "<div class='login'>
                        <h1>Login</h1>".((isset($error)) ? '<p class="error-message">The credentials you entered are incorrect.</p>' : '<p>Welcome! Please enter your username and password to login.</p>')."
                        <form action='".htmlspecialchars($_SERVER['PHP_SELF'])."' method='post'>
                            <label for='username'><b>Username</b></label>
                            <input type='text' name='username' required>
                            <label for='password'><b>Password</b></label>
                            <input type='password' name='password' required>
                            <button type='submit'>Login</button>
                        </form>
                    </div>";
                ?>
            </div>
        <main>
    </body>
</html>