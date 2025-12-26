<?php

use PhpSPA\Http\Response;

require_once 'vendor/autoload.php';
require_once 'utils/baseFetch.php';

$data = [
   'id' => 5,
   'name' => 'Dave'
];

// $response = baseFetch("/notify")->post($data);

// if ($response->failed())
//    Response::sendError($response->error(), Response::StatusInternalServerError);

// $data = $response->json();


var_dump($data);
