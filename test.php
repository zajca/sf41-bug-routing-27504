<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/var/cache/dev/srcDevDebugProjectContainerUrlMatcher.php';

$context = new \Symfony\Component\Routing\RequestContext('', 'GET', 'nsp.localdev', 'http', 80, 443, '/admin/api/package.json', '');
$matcher = new \srcDevDebugProjectContainerUrlMatcher($context);
$matcher->match('/admin/api/package.json');
