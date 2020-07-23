<?php

namespace Deployer;

task('artisan:db:seed', function () {
    run('{{bin/php}} {{release_path}}/artisan db:seed --force');
});
