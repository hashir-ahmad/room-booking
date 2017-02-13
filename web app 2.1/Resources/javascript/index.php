<?php
// if(isset($_POST['submit']))
// {
//   $email = htmlspecialchars($_POST['inpEmail']);
//   echo $email . " has been added to our list";
//   $emailFile = fopen("emails.txt", "a");
//   fwrite($emailFile, $email . PHP_EOL);
//   fclose($emailFile);
// }

# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
  if (isset($_POST['inpEmail'])) {

    $email = filter_var($_POST['inpEmail'], FILTER_SANITIZE_STRING);
    echo $email . " has been added to our list";
    $emailFile = fopen("emails.txt", "a");
    fwrite($emailFile, $email . PHP_EOL);
    fclose($emailFile);

  }
}

?>
