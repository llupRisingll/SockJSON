<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require 'vendor/autoload.php';
require 'class/Transaction.php';

$server = IoServer::factory( 
    new HttpServer(
        new WsServer(
            new Transaction()
        )
    ), 8080 
);

try{
    echo "Starting the application...\n";
    echo "Application Running...\n";
    $server->run();
}
catch(\RuntimeException $e){
    echo "Failed to initialize in port for real-time Transaction. A React Loop was not provided during instantiation\n";
    exit;
}