<?php

namespace Deployer;

task('deploy:install', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:upload_dirs',
    'deploy:upload_files',
    'deploy:copy_dirs',
    'deploy:copy_files',
    'artisan:down',
    'artisan:key:generate',
    'artisan:storage:link',
    'artisan:migrate',
    'artisan:db:seed',
    'artisan:view:clear',
    'artisan:config:clear',
    'artisan:route:clear',
    'deploy:custom',
    'deploy:symlink',
    'artisan:up',
    'deploy:unlock',
    'cleanup',
    'success',
]);
