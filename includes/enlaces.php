<?php

    $productos = [
        [
            "nombre"=>"David", 
            "edad"=>18
        ],
        [
            "nombre"=>"pedro", 
            "edad"=>21
        ]
    ];


$json = '{"nombre":"David", "edad":18}';
$data = json_decode($json); 