<?php
    session_start();

include('functions.php');
include('connection.php')
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>My Simple Blog</title>
    <link href="style.css" type="text/css" rel="stylesheet"  />
    <h1>My Blog</h1>
    <h4>In this web site you can leave any post you want.</h4>
    <hr />
</head>
<body>
<?php
if($_SESSION['isAuth']) {
    include('logout_nav.php');
} else {
    include('login_nav.php');
}
