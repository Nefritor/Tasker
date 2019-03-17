<?php
require_once '../core/model.php';
require_once '../core/view.php';
require_once '../core/controller.php';
require_once '../core/database.php';
require_once '../models/model_addtask.php';
require_once '../controllers/controller_addtask.php';

$controller = new Controller_Addtask();
$controller->action_addtask($_REQUEST);