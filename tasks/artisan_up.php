<?php

namespace Deployer;

task('artisan:up', function () {
    run('{{bin/php}} {{release_path}}/artisan up');
});
