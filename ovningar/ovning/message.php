<?php

if ($_GET['messages']){
$messages = [
    'Remember to feed the cat!',
    'I am a prince but have nowhere to place my millions of dollars',
    'Disney is interested in buying your company'
];
echo json_encode(['messages' => $messages]);
}
?>