<?php

$users = [
    [
        'name' => 'Sahib',
        'surname' => 'Fermanli',
        'birthday' => '1997-05-23',
        'country' => 'Azerbaijan',
        'is_developer' => true
    ],
    [
        'name' => 'Mesut',
        'surname' => 'Ozil',
        'birthday' => '1988-09-15',
        'country' => 'Turkey',
        'is_developer' => false
    ]
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($users);
