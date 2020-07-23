<?php

namespace Deployer;

task('deploy:upload_files', function () {
    foreach (get('upload_files') as $local => $remote) {
        if (testLocally("[ -f $local ]")) {
            runLocally("scp $local {{user}}@{{hostname}}:{{release_path}}/$remote");
        }
    }
})
->desc('Upload files to host');
