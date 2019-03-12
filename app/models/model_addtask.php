<?php
class Model_Addtask extends Model
{
    public function add_task_data($data) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nefritor";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return 'fault';
        } else {
            $sql = "
            INSERT INTO tasks (username, email, description, status)
            values ('".$data['username']."', '".$data['email']."', '".$data['desc']."', 0)";

            $result = $conn->query($sql);
            return 'success';
        }

        $conn->close();
    }
}