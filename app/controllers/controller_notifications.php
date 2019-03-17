<?php
class Controller_Notifications extends Controller
{
    function __construct() {
        $this->model = new Model_Notifications();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_table_data();
        $this->view->generate('notifications.php', 'template.php', $data);
    }

    function action_unsubscribe($id) {
        $data = $this->model->unsubscribe($id);
        echo $data;
    }

    function action_get_subscriptions() {
        $response = $this->model->get_subscriptions();
        echo $response;
    }
}
