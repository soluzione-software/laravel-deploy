<?php

return [
    'repository' => 'git@github.com:{username}/{repository}.git',

    'keep_releases' => 5,

    'shared' => [
        'dirs' => [
            'storage',
        ],
        'files' => [
            //
        ],
    ],

    'copy' => [
        'dirs' => [
            //
        ],
        'files' => [
            '.env',
        ],
    ],

    'upload' => [
        'dirs' => [
            //
        ],
        'files' => [
            //
        ],
    ],
];
