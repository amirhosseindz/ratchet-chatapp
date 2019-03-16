<?php
/**
 */
$entryData = [
    'user' => 'admin',
    'text' => 'im admin ;)',
    'time' => date('h:i A')
];
$context   = new ZMQContext();
$socket    = $context->getSocket(ZMQ::SOCKET_PUSH, 'admin message');
$socket->connect("tcp://localhost:5555");
$socket->send(json_encode($entryData));