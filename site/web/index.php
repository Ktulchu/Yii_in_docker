<?php
die('STOP');

require dirname(__DIR__) . '/../config/bootstrap.php';

(new \arbat\crm\components\app\App())->run();
