<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Username is requried.");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is requried.");
        exit();
    } else {
        $sqlQuery = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $results = mysqli_query($conn, $sqlQuery);

        if (mysqli_num_rows($results) === 1) {
            $row = mysqli_fetch_assoc($results);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] === $uname;
                header("Location: home.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorect Username and Password");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}