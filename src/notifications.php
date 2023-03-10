<?php

header('Content-type: application/json');

$password = "qwerty";

if (!isset($_GET['password']) || $_GET['password'] !== $password) {
    echo json_encode(['error' => 'Wrong password! Please provide the correct password!']);
} elseif ($_GET['password'] === $password) {
    echo json_encode(['notification' => 'CDF{j00_H4v3_b33N_N071f13d}']);
} 