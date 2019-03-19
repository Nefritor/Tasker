<?php
class Controller_Test extends Controller
{
    function __construct() {
        $this->view = new View();
    }

    function action_index() {
        $this->view->generate('test.php', 'template.php', null);
    }
}