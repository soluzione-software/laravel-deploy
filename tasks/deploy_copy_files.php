<?php

namespace Deployer;

task('deploy:copy_files', function () {
    if (has('previous_release')) {
        foreach (get('copy_files') as $file) {
            if (test("[ -f {{previous_release}}/$file ]")) {
                run("cp {{previous_release}}/$file {{release_path}}/$file");
            }
        }
    }
})
->desc('Copy files from previous release');
