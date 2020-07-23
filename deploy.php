<?php

namespace Deployer;

require 'recipe/common.php';

require __DIR__ . '/parameters.php';
require __DIR__ . '/hosts.php';
require __DIR__ . '/tasks/tasks.php';

// if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
