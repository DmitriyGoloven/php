<?php

//print_r($_POST);

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];


if (trim($name) == "")
    echo "no name";
else if (strlen(trim($name)) <= 1)
    echo "small name";
else if (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "")
    echo "invalid data";
else {
    echo "<h1> all data</h1>
<p>$name</p>
<p>$pass</p>
<p>$email</p>
<p>$_POST[message]</p>";
}

