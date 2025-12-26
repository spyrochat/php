<?php

use function Component\useFetch;
use PhpSPA\Core\Client\PendingRequest;
use PhpSPA\Http\Response;

function baseFetch(string $path): PendingRequest
{
   if (!$secret = getenv('SPYROCHAT_UNIX_SECRET')) {
      Response::sendError('Unix Secret not set.', Response::StatusInternalServerError);
   }

	$sockPath = dirname(__DIR__, 2) . '/spyrochat.sock';
   $secret = "Bearer $secret";

	$response = useFetch("http://172.30.48.1:8000/api$path")
	   ->headers([
	      'Authorization' => $secret,
	      'Content-Type' => 'application/json'
	   ])
		//->unixSocket($sockPath)
		->connectTimeout(2)
		->timeout(2);

	return $response;
}
