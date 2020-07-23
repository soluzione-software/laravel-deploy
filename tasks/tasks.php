<?php

namespace Deployer;

require __DIR__ . '/artisan_config_clear.php';
require __DIR__ . '/artisan_db_seed.php';
require __DIR__ . '/artisan_down.php';
require __DIR__ . '/artisan_key_generate.php';
require __DIR__ . '/artisan_migrate.php';
require __DIR__ . '/artisan_route_clear.php';
require __DIR__ . '/artisan_storage_link.php';
require __DIR__ . '/artisan_up.php';
require __DIR__ . '/artisan_view_clear.php';

require __DIR__ . '/deploy.php';
require __DIR__ . '/deploy_copy_files.php';
require __DIR__ . '/deploy_custom.php';
require __DIR__ . '/deploy_install.php';
require __DIR__ . '/deploy_upload_dirs.php';
require __DIR__ . '/deploy_upload_files.php';
