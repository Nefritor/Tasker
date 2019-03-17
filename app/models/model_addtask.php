<?php
class Model_Addtask extends Model
{
    public function add_task_data($data) {
        $database = new Database();
        $result = $database->query( "
            INSERT INTO tasks (username, email, description, datetime)
            values ('".addslashes($data['username'])."', '".addslashes($data['email'])."', '".addslashes($data['desc'])."', '".$data['datetime']."')", true);
        return $result;
    }
}