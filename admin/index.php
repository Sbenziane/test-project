<?php
if ( ($_SESSION['login'] == '') || (!isset($_SESSION['login'])) ) {
    header('Location: login.php');
}

echo "test";
