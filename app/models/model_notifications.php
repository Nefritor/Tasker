<?php
class Model_Notifications extends Model
{
    public function get_table_data() {
        $database = new Database();
        session_start();
        $data = $database->query("
            SELECT 
                notifications.id,
                tasks.username,
                tasks.description,
                tasks.datetime,
                notifications.is_visible
            FROM notifications 
            left join tasks on tasks.id = notifications.task_id
            WHERE notifications.user_id = ".$_SESSION['user_id'], false);
        return $data;
    }

    public function unsubscribe($data) {
        $database = new Database();
        $result = $database->query( "
            UPDATE notifications 
            SET is_visible = 0
            where id = ".$data['id'], true);
        return $result;
    }

    public function get_subscriptions() {
        $database = new Database();
        session_start();
        $data = $database->query("
            SELECT 
                notifications.id,
                tasks.username,
                tasks.description,
                tasks.datetime
            FROM notifications 
            left join tasks on tasks.id = notifications.task_id
            WHERE notifications.user_id = ".$_SESSION['user_id']." and notifications.is_visible = 1", false);
        return json_encode($data);
    }
}