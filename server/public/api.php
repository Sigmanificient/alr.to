<?php

use alr\core\Response;

require '../core/bootstrap.php';

Response::json(array('uri' => $_GET['uri']));
