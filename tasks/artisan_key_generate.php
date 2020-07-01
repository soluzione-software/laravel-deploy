<?php

namespace Deployer;

task('artisan:key:generate', function () {
    run('{{bin/php}} {{release_path}}/artisan key:generate');
});
