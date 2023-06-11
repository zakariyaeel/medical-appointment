<?php
require('configdb.php');

session_unset();
session_destroy();

header("Location: login.php");