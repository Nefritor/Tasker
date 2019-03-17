<?php
class Database
{
    public function query($sqlquery, $returnraw) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nefritor";

        $database = Array(
            'servername' => $servername,
            'username' => $username,
            'password' => $password,
            'dbname' => $dbname
        );

        $conn = new mysqli(
            $database['servername'],
            $database['username'],
            $database['password'],
            $database['dbname']
        );

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            $result = 'connection fault';
        } else {
            $result = $conn->query($sqlquery);

            if ($returnraw === true) {
                return $result;
            } else if ($returnraw === false) {

                $data = array();
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        array_push($data, $row);
                    }
                }
                return $data;
            }
        }

        $conn->close();

        return $result;
    }
}