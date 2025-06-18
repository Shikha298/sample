<?php
header('Content-Type: application/json');

$users = [
    ["id" => 1, "name" => "Shikha", "role" => "Developer"],
    ["id" => 2, "name" => "Patel", "role" => "Designer"]
];

echo json_encode([
    "status" => "success",
    "users"  => $users
]);