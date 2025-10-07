<?php
// Front Controller for CodeIgniter 4
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
$pathsPath = realpath(__DIR__ . '/../app/Config/Paths.php');
require $pathsPath;
$paths = new Config\Paths();
chdir(FCPATH);
require rtrim($paths->systemDirectory, '\/ ') . '/bootstrap.php';
$context = 'production';
$app = Config\Services::codeigniter($context);
$app->initialize();
$app->run();
