<?php
ini_set('display_errors', 1);
require_once 'app/core/model.php';
require_once 'app/core/view.php';
require_once 'app/core/controller.php';
require_once 'app/core/route.php';
session_start(); // старт сессии
Route::start(); // запускаем маршрутизатор