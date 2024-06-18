<?php
require_once 'config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
require "pages/{$page}.php";