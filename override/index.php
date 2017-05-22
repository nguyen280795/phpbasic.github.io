<?php

require('session.php');

$handler = new Session();
session_set_save_handler($handler, true);

session_start();

$_SESSION['value'] = 50;

echo $_SESSION['value'];
