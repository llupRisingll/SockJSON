<?php

use Ratchet\Server\IoServer;

if (count($argv) > 0){
    @ $str1 = $argv[1];
    @ $str2 = $argv[2];
    @ $str3 = $argv[3];
    @ $str4 = $argv[4];

    if ($str1 == "start"){
        
        require dirname(__DIR__) . '/vendor/autoload.php';
        require dirname(__DIR__) . '/class/Transaction.php';

        $server = IoServer::factory(
            new Chat(),
            8080
        );
        $server->run();
    }
}