<?php
include_once "../base.php";

// dd($_POST);
$Que->save([
    'text' => $_POST['text'],
    'subject_id' => 0,
    'vote' => 0
]);
$row = $Que->find([
    'text' => $_POST['text'],
]);
foreach ($_POST['opt'] as $idx => $opt) {
    $Que->save([
        'text' => $opt,
        'subject_id' => $row['id'],
        'vote' => 0
    ]);
}
to("../backend.php?do=que");
