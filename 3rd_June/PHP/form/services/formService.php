<?php
/*define("pets", ['dog', 'cat', 'parrot']);

for ($i = 0; $i < sizeof(pets); $i++) {
    echo pets[$i] . '<br>';
}
*/

include '../../config/config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!(empty($email || $password))) {
        $user = $connection->query("INSERT INTO user(email,password) VALUES('$email','$password')");
        if ($user > 0 && $connection->affected_rows > 0) {
            echo "user Added";
        } else {
            echo "user Not Added";
        }
    } else {
        echo "Please enter your email and password";
    }

}

if (isset($_POST['update'])) {
    $userID = $_POST['userID'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!(empty($userID || $email || $password))) {
        $user = $connection->query("UPDATE user SET email = '$email' , password = '$password' WHERE id = $userID");
        if ($user > 0 && $connection->affected_rows > 0) {
            echo "user Update";
            header("location:/Demo/PHP/form/form.php");
        } else {
            echo "user Not Update";
        }
    } else {
        echo "Please enter your email and password";
    }
}


?>