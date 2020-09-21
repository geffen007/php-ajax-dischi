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
        foreach ($database as $key) {
            $selectedAuthor = [];
            if (in_array($_GET['author'], $key)) {
                array_push($selectedAuthor, $key);

            }
            encodeJson($selectedAuthor);
        }
    }
}
