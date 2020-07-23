<?php

namespace Deployer;

$config = require __DIR__ . '/config.php';

set('repository', $config['repository']);

set('shared_dirs', $config['shared']['dirs']);
set('shared_files', $config['shared']['files']);

set('copy_dirs', $config['copy']['dirs']);
set('copy_files', $config['copy']['files']);

set('upload_dirs', $config['upload']['dirs']);
set('upload_files', $config['upload']['files']);

// Laravel writable dirs
set('writable_dirs', [
    'bootstrap/cache',
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);
