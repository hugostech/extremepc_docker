<?php
// HTTP
define('HTTP_SERVER', 'https://'.getenv('APPHOST').'/');

// HTTPS
define('HTTPS_SERVER', 'https://'.getenv('APPHOST').'/');

// DIR
define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// Cache
define('CACHE_DRIVER', 'memcached'); // 'file', 'apc', 'mem' or 'memcached'
define('CACHE_HOSTNAME', 'memcached');
define('CACHE_PORT', '11211');
define('CACHE_PREFIX', 'oc_');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('MYSQL_HOST'));
define('DB_USERNAME', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_DATABASE', 'roctech');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');