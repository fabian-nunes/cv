<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('192.168.0.10', 8080);
$app->route('/chat', new ChatServer, ['*']);
$app->run();
