<?php

if (empty($_REQUEST['end_session'])) {
    $login = $_REQUEST['login'];
    $pass_hash = hash('sha1', $_REQUEST['password']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nefritor";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users where username = '".$login."'";
    $result = $conn->query($sql);
    $request = array();

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            $request = array(
                'user_id' => $row['id'],
                'user_name' => $row['username'],
                'pass_hash' => $row['pass_hash'],
                'is_admin' => $row['is_admin'] == 1 ? true : false
            );
        }
    }

    if ($request['pass_hash'] == $pass_hash) {
        session_start();
        $_SESSION['user_id'] = $request['user_id'];
        $_SESSION['user_name'] = $request['user_name'];
        $_SESSION['is_admin'] = $request['is_admin'];
    }

    $conn->close();

    header('Location: http://' . $_SERVER['HTTP_HOST']);
} else {
    if ($_REQUEST['end_session'] == true) {
        session_start();
        session_destroy();
    }
}