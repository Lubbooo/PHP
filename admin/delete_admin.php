<?php

require './connect.php';
session_start();
unset($_SESSION['id']);
unset($_SESSION['level']);
header('location:./index.php');