<?php
$http = 'http';
$host = $_SERVER['HTTP_HOST'];
$url = $http . '://' . $host;

return [
    'url' => $url,
    'profileImageBaseUrl' => '/storage/profile/photo/',
    'inviteLink' => $url . '/login',
    'adminEmail' => 'admin@taskme.uz'
];
