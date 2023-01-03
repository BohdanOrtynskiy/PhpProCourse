<?php


return [
    'db' => [
        'host' => getenv('DB_HOST') ?? null,
        'database' => getenv('DB_DATABASE') ?? null,
        'user' => getenv('DB_USERNAME') ?? null,
        'password' => getenv('DB_PASSWORD') ?? null,
    ]
];