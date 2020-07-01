<?php

namespace Deployer;

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:down',
    'artisan:storage:link',
    'artisan:migrate',
    'artisan:view:clear',
    'artisan:config:clear',
    'artisan:route:clear',
    'deploy:symlink',
    'artisan:up',
    'deploy:unlock',
    'cleanup',
    'success',
]);
