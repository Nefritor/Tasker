<?php

require_once '../core/database.php';

if (empty($_REQUEST['end_session'])) {
    $login = $_REQUEST['login'];
    $pass_hash = hash('sha1', $_REQUEST['password']);

    $database = new Database();
    $result = $database->query( "SELECT * FROM users where username = '".$login."'", false);
    $request = array(
        'user_id' => $result[0]['id'],
        'user_name' => $result[0]['username'],
        'pass_hash' => $result[0]['pass_hash'],
        'is_admin' => $result[0]['is_admin'] == 1 ? true : false
    );

    if ($request['pass_hash'] == $pass_hash) {
        session_start();
        $_SESSION['user_id'] = $request['user_id'];
        $_SESSION['user_name'] = $request['user_name'];
        $_SESSION['is_admin'] = $request['is_admin'];
    }

    header('Location: http://' . $_SERVER['HTTP_HOST']);
} else {
    if ($_REQUEST['end_session'] == true) {
        session_start();
        session_destroy();
    }
}