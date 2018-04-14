<?php

$action = ( isset( $_REQUEST['action'] ) ) ? $_REQUEST['action'] : '';

if (function_exists($action)) {
    $action();
} else {
    http_response_code(400);
    die(400);
}

function test()
{
  echo "test";
}
