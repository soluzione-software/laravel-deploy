<?php

namespace Deployer;

task('artisan:config:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan config:clear');
});
