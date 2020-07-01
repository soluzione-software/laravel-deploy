<?php

namespace Deployer;

task('artisan:route:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan route:clear');
});
