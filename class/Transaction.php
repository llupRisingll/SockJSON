<?php

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Transaction implements MessageComponentInterface {
    protected $clients;

    public function onOpen(ConnectionInterface $conn) {
        $this->clients = new \SplObjectStorage;
    }

    public function onMessage(ConnectionInterface $from, $msg) {

    }

    public function onClose(ConnectionInterface $conn) {

    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        
    }
}