<?php

namespace Deployer;

set('repository', require __DIR__ . '/repository.php');

set('shared_dirs', [
    'storage',
]);

set('shared_files', [
    '.env',
]);
