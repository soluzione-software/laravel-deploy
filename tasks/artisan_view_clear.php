<?php

namespace Deployer;

task('artisan:view:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan view:clear');
});
