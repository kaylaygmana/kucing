<?php

session_start();

session_unset();
session_destroy();

setCookie(
    'ingat_saya',
    null,
    time()- 3600,
    '/'
);

header('Location: login.php');
exit;

?>

