<?php
class Controller_Addtask extends Controller
{
    function __construct() {
        $this->model = new Model_Addtask();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('addtask.php', 'template.php', $data);
    }

    function action_addtask($data) {
        $response = $this->model->add_task_data($data);
        echo $response;
    }
}