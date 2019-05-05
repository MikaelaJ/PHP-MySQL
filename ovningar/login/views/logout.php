<?php
require '../partials/session.php';
session_destroy();

header("Location: ../index.php");
?>
