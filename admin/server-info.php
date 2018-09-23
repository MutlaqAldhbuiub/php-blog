<?php

# $_SERVER superGlobal

    // Create server array
        $server = [
            'HTTP Host' => $_SERVER['HTTP_HOST'],
            'Server IP'=> $_SERVER['SERVER_ADDR'],
            'Server Software' => $_SERVER['SERVER_SOFTWARE'],
            'Document Root' => $_SERVER['DOCUMENT_ROOT'],
            'Current Page' => $_SERVER['PHP_SELF'],
            'PROTOCOL' => $_SERVER['SERVER_PROTOCOL'],
            'Server ADMIN' => $_SERVER['SERVER_ADMIN'],
        ];
        
// Create client array

$client = [
    'User system info' => $_SERVER['HTTP_USER_AGENT'],
    'User IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];


?>