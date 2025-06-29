<?php

// Ini adalah entry point untuk fungsi serverless Vercel
// Pastikan path ke autoload.php dan public/index.php sesuai

// Require Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Boot Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();

$response = $kernel->handle(
    $request
);

$response->send();

$kernel->terminate($request, $response);