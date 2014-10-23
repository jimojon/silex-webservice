<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \util\Storage;

$app->get('/', function (Request $request) use ($app)
{
    $storage = new Storage();

    return $app->json($storage->readData());
});

$app->post('/', function(Request $request) use($app)
{
    $storage = new Storage();
    $storage->writeData(json_decode($request->getContent()));
    return new Response('', 201);
}
);

