<?php

namespace Deployer;

task('deploy:custom', function () {


    $filename = __DIR__ . '/../custom_tasks.php';

    if(file_exists($filename)){
        require_once $filename;
    }
    else{
        echo 'No custom tasks.';
    }
})
->desc('Run custom tasks');
