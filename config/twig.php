<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/twig/twig/src/Loader/FilesystemLoader.php';
require_once __DIR__ . '/../vendor/twig/twig/src/Extension/DebugExtension.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());
