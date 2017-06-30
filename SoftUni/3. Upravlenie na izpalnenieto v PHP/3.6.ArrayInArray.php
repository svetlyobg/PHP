<?php

$users = array(
  "pesho" => array(
    "email" => "pesho@devbg.org",
    "phone" => "0982364745"),
  "gosho" => array(
    "email"   => "gosho@devbg.org",
    "phone" => "0982364745",
    "website" => "htp://gosho.co.uk"),
  "kincho" => array(
    "phone" => "0982364745",
    "website" => "https://kkkkk45.com"),
);
?>

<div class = 'userInfo'>
<?php
foreach ($users as $key => $value) {
  $currentUser = $users [$key];
  echo "User: <span class='user'>$key</span><br>\n";
  if (array_key_exists('email', $currentUser)) {
      $email = $currentUser['email'];
      echo "Email: <span class='email'>$email</span><br>\n";
      #print_r ($value);
    }
}
?>
</div>
