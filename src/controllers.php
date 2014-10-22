<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->get('/', function (Request $request) use ($app)
{
    $status = array(
        'hello' => 'world'
    );

    return $app->json($status);
});
