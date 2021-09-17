<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = strip($_POST["title"]);
	    $paragraph = strip($_POST["paragraph"]);
        $date = date("Y-m-d");
        $conn = new mysqli("localhost", "root", "", "portfolio");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO blog (title, paragraph, date) VALUES ('$title', '$paragraph', '$date')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["posted"] = true;
            echo "<script>console.log('New record created successfully');</script>";
        }
        else {
            echo "<script>console.log('ERROR: failed to insert into table');</script>";
        }
        // Redirect to prevent the resubmission of form, if the user refreshes the page.
        header("Location: index.php");
    }

    function strip($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>