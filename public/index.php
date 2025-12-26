<?php

use PhpSPA\Http\Response;

require_once '../vendor/autoload.php';
require_once '../utils/baseFetch.php';

$payload = [
   'id' => 5,
   'name' => 'Dave'
];

$response = baseFetch("/notify")->post($payload);

if ($response->failed())
   Response::sendError($response->error() ?? $response->text(), Response::StatusInternalServerError);

$data = $response->json();


var_dump($data);
