<?php

namespace Deployer;

task('artisan:storage:link', function () {
    run('{{bin/php}} {{release_path}}/artisan storage:link');
});
