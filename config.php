<?php
define('kalipentest', 'kalipentest');
define('kalipentest123', 'kalipentest123');

$cfg_callbacks = [
    'like' => function($user) {
        $msg = $user->getUsername() . ' liked !';
        var_dump($msg);
    },
    'comment' => function($user, $comment) {
        $msg = $user->getUsername() . ' : ' . $comment;
        var_dump($msg);
    }
];
