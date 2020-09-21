<?php

include __DIR__ .'/db.php';

getDb($database);


function encodeJson($db){
    header('Content-Type: application/json');
    echo json_encode($db);
}

function getDb($database){
    if (empty($_GET['author'])) {
        encodeJson($database);
    } else {
        $selectedAuthor = [];
        foreach ($database as $item) {
            if (in_array($_GET['author'], $item)) {
                array_push($selectedAuthor, $item);
            }
        }
        encodeJson($selectedAuthor);
    }
}
