<?php

namespace Deployer;

task('artisan:migrate', function () {
    run('{{bin/php}} {{release_path}}/artisan migrate --force');
});
