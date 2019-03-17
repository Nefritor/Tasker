<?php
class Model_Main extends Model
{
    public function get_table_data() {
        $database = new Database();
        $data = $database->query("SELECT * FROM tasks", false);
        return $data;
    }

    public function get_task_data($id) {
        $database = new Database();
        $data = $database->query("SELECT * FROM tasks where id = $id", false);
        return $data;
    }

    public function set_task_data($data) {
        $database = new Database();
        $result = $database->query( "
            UPDATE tasks 
            SET description = '".addslashes($data['desc'])."', datetime = '".$data['datetime']."'
            where id = ".$data['id'], true);
        return $result;
    }

    public function set_notification($data) {
        $database = new Database();
        session_start();
        $result = $database->query( "SELECT * FROM notifications where user_id = '".$_SESSION['user_id']."' and task_id = '".$data['taskid']."'", false);
        if (empty($result)) {
            $result = $database->query( "
            INSERT INTO notifications (user_id, task_id, is_visible)
            values (".$_SESSION['user_id'].", ".$data['taskid'].", 1)", true);
        } else if ($result[0]['is_visible'] == false) {
            $result = $database->query( "
            UPDATE notifications 
            SET is_visible = 1
            where user_id = ".$_SESSION['user_id']." and task_id = ".$data['taskid'], true);
        } else return -1;
        return $result;
    }
}