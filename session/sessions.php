<?php

session_start();

//$_SESSION['hello'] = 'world; will be add to the cookie file
// identify user to store related data
// $_SESSION['logged_in_user'] = 123;


if(!isset($_SESSION['logged_in_user'])) {
    echo 'You are not logged in';
} else {
    echo 'You are log in as' . $_SESSION['logged_in_user'];
}