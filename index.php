<?
    session_start();
    if(!session_is_registered(username)) { header("location:getinfo.php");
    }
$username = session_is_registered(username);
    $password = session_is_registered(password);
echo $username;
    echo $password;
    ?>
    