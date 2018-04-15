<?php

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Transaction implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
         // Store the new connection to send messages to later
         $this->clients->attach($conn);

         echo "New connection! ({$conn->resourceId})\n";
         
    }

    public function onMessage(ConnectionInterface $from, $msg) {

    }

    public function onClose(ConnectionInterface $conn) {

    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        
    }
}