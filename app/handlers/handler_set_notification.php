<?php
require_once '../core/model.php';
require_once '../core/view.php';
require_once '../core/controller.php';
require_once '../core/database.php';
require_once '../models/model_main.php';
require_once '../controllers/controller_main.php';

$controller = new Controller_Main();
$controller->action_set_notification($_REQUEST);