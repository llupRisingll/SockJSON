<?php

use Ratchet\Server\IoServer;
use MyApp\Chat;


if (count($argv) > 0){
    @ $str1 = $argv[1];
    @ $str2 = $argv[2];
    @ $str3 = $argv[3];
    @ $str4 = $argv[4];

    if ($str1 == "start"){
        $server = IoServer::factory(
            new Chat(),
            8080
        );
        $server->run();
        
    }
}