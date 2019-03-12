<?php
class Model_Main extends Model
{
    public function get_table_data() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nefritor";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);
        $data = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;

        $conn->close();
    }

    public function get_task_data($id) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nefritor";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM tasks where id = $id";
        $result = $conn->query($sql);
        $data = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;

        $conn->close();
    }

    public function set_task_data($data) {
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
            UPDATE tasks 
            SET description = '".$data['desc']."', status = ".$data['status']."
            where id = ".$data['id'];
            $result = $conn->query($sql);
            return 'success';
        }

        $conn->close();
    }
}