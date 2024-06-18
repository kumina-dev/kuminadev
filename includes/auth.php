<?php
session_start();

function is_logged_in() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
}

function require_login() {
    if (!is_logged_in()) {
        header('Location: ' . BASE_URL . '?page=login');
        exit();
    }
}