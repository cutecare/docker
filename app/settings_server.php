<?php
// MySQL server connection settings
define('DB_HOST', '?HOST');
define('DB_USER', '?USER');
define('DB_PASS', '?PASS');
define('DB_NAME', '?NAME');

// MySQL encryption algorithm
define('MYSQL_ENCRYPTION_ALGORITHM', 'AES'); 

// Server root folder
define('SERVER_ROOT', '?ROOT');

// Authorization options
define('AUTHORIZATION_FACTORY', 'AuthorizationCookiesFactory');

// Visualize application performance metrics
define('METRICS_VISIBLE', false);

// Automatically send bug reports
define('SEND_BUG_REPORTS', true);

// UTC offset of server time
define('DEFAULT_UTC_OFFSET','+00');

// Skip debugging info
define('ALLOW_DEBUG',false);

// External utilities
define('ZIP_HELP_COMMAND', 'zip --help 2>&1');
define('ZIP_APPEND_COMMAND', 'zip -q -r %1 %2 %3');
define('UNZIP_HELP_COMMAND', 'unzip --help 2>&1');
define('UNZIP_COMMAND', 'unzip %1');
define('MYSQLDUMP_HELP_COMMAND', 'mysqldump --help 2>&1');
define('MYSQL_HELP_COMMAND', 'mysql --help 2>&1');
define('MYSQL_INSTALL_COMMAND', 'mysql --host=%1 --user=%2 --password=%3 -e "source %4" 2>&1 ');
define('MYSQL_BACKUP_COMMAND', 'mysqldump --max_allowed_packet=768M --set-charset --default-character-set=utf8 --host=%1 --user=%2 --password=%3 --add-drop-table --force %4 > %5 ');
define('MYSQL_UPDATE_COMMAND', 'mysql --verbose --host=%1 --user=%2 --password=%3 --database=%4 -e "source %5" 2>&1 ');
define('MYSQL_APPLY_COMMAND', 'mysql --host=%1 --user=%2 --password=%3 --database=%4 -e "source %5" 2>&1 ');

// Address will be used to open application pages by users
define('SERVER_NAME','');
define('SERVER_PORT','');

// Address will be used to execute background tasks
define('SERVER_INTERNAL_NAME','');
//define('MAX_FILE_SIZE',''); // Maximum allowed file size (in bytes) to be uploaded via forms

// Addresses of external services
define('PLANTUML_SERVER_URL', 'http://plantuml.myalm.ru');
//define('PLANTUML_SERVER_URL', EnvironmentSettings::getServerUrl());

define('MATH_TEX_IMG', 'http://mathjax.myalm.ru/?math=');
//define('MATH_TEX_IMG', EnvironmentSettings::getServerUrl() . '/math?math=');

define('MATH_JAX_LIB_SRC', 'http://mathjax.myalm.ru/mathjax/MathJax.js?config=TeX-AMS_HTML');
//define('MATH_JAX_LIB_SRC', EnvironmentSettings::getServerUrl() . '/math/mathjax/MathJax.js?config=TeX-AMS_HTML');

// Allows anybody invite users into the system
define('INVITE_USERS_ANYBODY',true);

// Delete mail in support mailbox
define('MAILBOX_DELETE_MAIL',true);

// Wait timeouts
define('PAGE_WAIT_SECONDS', 60);

// DevOps incidents aggregator
define('DEVOPSSRV', 'http://api.devopsboard.com');
define('DEVOPSKEY', 'af4078b6e4630da32f3c164d121ea2b1');
define('UPDATES_URL', 'http://myalm.ru/news/tag/%D0%9E%D0%B1%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5');
define('HELP_COMMUNITY_URL','http://club.devprom.ru');
define('HELP_SUPPORT_URL','http://support.devprom.ru/issue/new');
define('SERVICE_URL', 'myalm.ru');
//define('CKEDITOR_EXTRAPLUGINS','markdown');

