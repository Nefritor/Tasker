<?php
class Controller_Main extends Controller
{
    function __construct() {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_table_data();
        $this->view->generate('main.php', 'template.php', $data);
    }

    function action_edittask($id) {
        $data = $this->model->get_task_data($id);
        $this->view->generate('edittask.php', 'template.php', $data);
    }

    function action_savetask($data) {
        $response = $this->model->set_task_data($data);
        echo $response;
    }

    function action_set_notification($data) {
        $response = $this->model->set_notification($data);
        echo $response;
    }

    function action_get_subscriptions() {
        $response = $this->model->get_subscriptions();
        echo $response;
    }
}
