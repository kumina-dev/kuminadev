<?php
require './config.php';

$endpoint = isset($_GET['endpoint']) ? $_GET['endpoint'] : '';
switch ($endpoint) {
    case 'file_manager':
        include 'file_manager.php';
        break;
    case 'song_recommender':
        include 'song_recommender.php';
        break;
    case 'password_generator':
        include 'password_generator.php';
        break;
    default:
        echo json_encode(['error' => 'Invalid API endpoint.']);
        break;
}