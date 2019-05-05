<?php
//Kolla om användaren försöker logga in
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'Mikaela' && $_POST['password'] == 'pass') {
        echo json_encode(['user' => $_POST['username']]);
    } else {
        http_response_code(403);
    }
}
?>
