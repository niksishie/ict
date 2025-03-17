<?php
session_start();
include 'connect.php';

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $checkemail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkemail->bind_param("s", $email);
    $checkemail->execute();
    $result = $checkemail->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertquery = $conn->prepare("INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        $insertquery->bind_param("ssss", $fname, $lname, $email, $password);

        if ($insertquery->execute()) {
            header("location: index.php");
            exit();
        } else {
            error_log("Database Insert Error: " . $conn->error, 3, 'error_log.txt');
            echo "An error occurred while processing your request. Please try again later.";
        }
    }
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } 
    else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>