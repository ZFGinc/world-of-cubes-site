<?php

$auth = checkAuth();

if (isset($_GET['id'])) {
  $user = getUser($_GET['id']);
} else {
  if($auth == true){
    $user = currentUser();
  }
  else{
    redirect('/sign_in.php');
  }
}