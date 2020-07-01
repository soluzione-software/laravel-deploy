<?php

namespace Deployer;

task('artisan:down', function () {
    run('{{bin/php}} {{release_path}}/artisan down');
});
