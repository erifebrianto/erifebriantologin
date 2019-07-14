<?php
$name = $_POST['name'];
$email = $_POST['email'];
$fp = fopen('formdata.csv', 'a');
$savestring = $name . ',' . $email . 'n';
fwrite($fp, $savestring);
fclose($fp);
header("location: http://facebook.com");
?>