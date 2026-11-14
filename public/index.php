<?php

session_start();

require_once '../config/database.php';

require_once '../app/core/Database.php';
require_once '../app/core/Model.php';
require_once '../app/core/Controller.php';

require_once '../app/models/Student.php';
require_once '../app/controllers/StudentController.php';

require_once '../app/core/Router.php';

$router = new Router();
$router->run();