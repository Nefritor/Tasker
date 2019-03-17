<?php
require_once '../core/model.php';
require_once '../core/view.php';
require_once '../core/controller.php';
require_once '../core/database.php';
require_once '../models/model_notifications.php';
require_once '../controllers/controller_notifications.php';

$controller = new Controller_Notifications();
$controller->action_get_subscriptions();