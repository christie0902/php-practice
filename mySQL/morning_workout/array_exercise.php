<?php
require_once 'Person.php';

$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];

$new_array =[];

function formatArray($old_array) 
{
    $new_array['full_name'] = $old_array['name'] . ' ' . $old_array['surname'];
    $new_array['job'] = $old_array['occupation'];

    return $new_array;
}

foreach ($old_array as $data)
{
    $new_array[] = formatArray($data);
}

var_dump($new_array);

$persons=[];
foreach ($old_array as $data)
{
    $person = new Person;
    $person->first_name = $data['name'];
    $person->last_name = $data['surname'];
    $person->job = $data['occupation'];

    $persons[] = $person;
}

// $persons = array_map(function($data) {
//     $person = new Person;
//     $person->first_name = $data['name'];
//     $person->last_name = $data['surname'];
//     $person->job = $data['occupation'];
//     return $person;
// }, $old_array);


var_dump($persons);