<?php

$action = ( isset( $_REQUEST['action'] ) ) ? $_REQUEST['action'] : '';

if (function_exists($action)) {
    $action();
} else {
    http_response_code(400);
    die(400);
}

function registration()
{
  //TD faire les vérifications sur password et login
  // voir si le login est pas deja utilisé et si le mot de passe est dans un format correcte

  if (!file_exists('./CSV/users.csv'))
  {
    $users = fopen("./CSV/users.csv", "w");
  }else{
    $users = fopen("./CSV/users.csv", "r")
  }

  $login = $_POST['login'];
  $password = $_POST['password'];

  $user = fputcsv($users,array($login,$password));
  fclose($users);
  if ($user == false)
  {
    return "erreur";
  }
  return "success";
}
