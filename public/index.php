<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;
use App\Greeter;

$greeter = new Greeter();
$calculator = new Calculator();

$name = isset($_GET['name']) && is_string($_GET['name']) ? $_GET['name'] : '';
$version = getenv('APP_VERSION') ?: 'dev';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CI/CD Demo</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 640px; margin: 3rem auto; padding: 0 1rem; }
        code { background: #eee; padding: 2px 6px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1><?= htmlspecialchars($greeter->greet($name), ENT_QUOTES) ?></h1>
    <p>2 + 3 = <code><?= $calculator->add(2, 3) ?></code></p>
    <p>Try <code>?name=Alex</code> in the URL.</p>
    <p><small>Version: <?= htmlspecialchars($version, ENT_QUOTES) ?></small></p>
</body>
</html>
