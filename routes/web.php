<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function ()  {
    return view('daily', ['name' => 'James']);
});

$app->get('/list', function ()  {
    $query = new MongoDB\Driver\Query(array());
    $manager = new MongoDB\Driver\Manager(env('DB_MONGO_STRING'));
    $cursor = $manager->executeQuery("container.dailylist", $query);
    $result = array();
    foreach ($cursor as $document) {
        $item["title"] = "{$document->AutorName} - {$document->Title}";
        $item["file"] = $document->Url;
        $item["hown"] = null;
        $result[] = $item;
    }

    return response()->json($result);
});
