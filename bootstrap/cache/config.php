<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://127.0.0.1:8000',
    'asset_url' => 'http://127.0.0.1:8000',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:9Q73dO/ZrwgHIwidnRaX41XyrD+7U0k/DzXnFT2Ks1I=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Laravel\\Tinker\\TinkerServiceProvider',
      23 => 'TCG\\Voyager\\VoyagerServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'DbView' => 'Flynsarmy\\DbBladeCompiler\\Facades\\DbView',
      'Helpers' => 'App\\Helpers\\Helpers',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'kiranbroker',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kiranbroker',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kiranbroker',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kiranbroker',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\fonts/',
      'font_cache' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\FORTIU~1\\AppData\\Local\\Temp',
      'chroot' => 'C:\\xampp\\htdocs\\kiranbroker',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\app/public',
        'url' => 'http://127.0.0.1:8000/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\xampp\\htdocs\\kiranbroker\\public\\storage' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'hooks' => 
  array (
    'enabled' => true,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'encryption' => 'tls',
        'username' => 'fortius.developer@gmail.com',
        'password' => 'Bh@v!k10',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'fortius.developer@gmail.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\kiranbroker\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'page-blocks' => 
  array (
    'callout' => 
    array (
      'name' => 'Callout',
      'template' => 'voyager-page-blocks::blocks.callout',
      'fields' => 
      array (
        'size' => 
        array (
          'field' => 'size',
          'display_name' => 'Size (height) of section',
          'type' => 'select_dropdown',
          'required' => 1,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Small',
              1 => 'Medium',
              2 => 'Large',
              3 => 'Extra Large',
            ),
          ),
          'placeholder' => 0,
        ),
        'fade_background' => 
        array (
          'field' => 'fade_background',
          'display_name' => 'Fade out background',
          'type' => 'checkbox',
          'required' => 0,
        ),
        'br_1' => 
        array (
          'field' => 'br_1',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'background_image' => 
        array (
          'field' => 'background_image',
          'display_name' => 'Background image',
          'type' => 'image',
          'required' => 1,
        ),
        'br_2' => 
        array (
          'field' => 'br_2',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'title' => 
        array (
          'field' => 'title',
          'display_name' => 'Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content' => 
        array (
          'field' => 'content',
          'display_name' => 'Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_3' => 
        array (
          'field' => 'br_3',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'button_text' => 
        array (
          'field' => 'button_text',
          'display_name' => 'Button Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link' => 
        array (
          'field' => 'link',
          'display_name' => 'Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_4' => 
        array (
          'field' => 'br_4',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'content_one_column' => 
    array (
      'name' => 'Content - 1 Column/s',
      'template' => 'voyager-page-blocks::blocks.content_one_column',
      'fields' => 
      array (
        'html_content_1' => 
        array (
          'field' => 'html_content_1',
          'display_name' => 'Column 1 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'content_two_columns' => 
    array (
      'name' => 'Content - 2 Column/s',
      'template' => 'voyager-page-blocks::blocks.content_two_columns',
      'fields' => 
      array (
        'html_content_1' => 
        array (
          'field' => 'html_content_1',
          'display_name' => 'Column 1 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_2' => 
        array (
          'field' => 'html_content_2',
          'display_name' => 'Column 2 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'content_three_columns' => 
    array (
      'name' => 'Content - 3 Column/s',
      'template' => 'voyager-page-blocks::blocks.content_three_columns',
      'fields' => 
      array (
        'html_content_1' => 
        array (
          'field' => 'html_content_1',
          'display_name' => 'Column 1 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_2' => 
        array (
          'field' => 'html_content_2',
          'display_name' => 'Column 2 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_3' => 
        array (
          'field' => 'html_content_3',
          'display_name' => 'Column 3 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'content_four_columns' => 
    array (
      'name' => 'Content - 4 Column/s',
      'template' => 'voyager-page-blocks::blocks.content_four_columns',
      'fields' => 
      array (
        'html_content_1' => 
        array (
          'field' => 'html_content_1',
          'display_name' => 'Column 1 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_2' => 
        array (
          'field' => 'html_content_2',
          'display_name' => 'Column 2 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_3' => 
        array (
          'field' => 'html_content_3',
          'display_name' => 'Column 3 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'html_content_4' => 
        array (
          'field' => 'html_content_4',
          'display_name' => 'Column 4 content',
          'type' => 'rich_text_box',
          'required' => 0,
          'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'cards_one_column' => 
    array (
      'name' => 'Cards - 1 Column/s',
      'template' => 'voyager-page-blocks::blocks.cards_one_column',
      'fields' => 
      array (
        'image_1' => 
        array (
          'field' => 'image_1',
          'display_name' => 'Column 1: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'image_position_1' => 
        array (
          'field' => 'image_position_1',
          'display_name' => 'Position of Column 1: Image',
          'type' => 'select_dropdown',
          'required' => 0,
          'options' => 
          array (
            0 => 'Left',
            1 => 'Right',
          ),
          'placeholder' => 0,
        ),
        'br_1_1' => 
        array (
          'field' => 'br_1_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_1' => 
        array (
          'field' => 'title_1',
          'display_name' => 'Column 1: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_1' => 
        array (
          'field' => 'content_1',
          'display_name' => 'Column 1: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_1_2' => 
        array (
          'field' => 'br_1_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_1' => 
        array (
          'field' => 'button_text_1',
          'display_name' => 'Button Column 1: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_1' => 
        array (
          'field' => 'link_1',
          'display_name' => 'Column 1: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_1_3' => 
        array (
          'field' => 'br_1_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'cards_two_columns' => 
    array (
      'name' => 'Cards - 2 Column/s',
      'template' => 'voyager-page-blocks::blocks.cards_two_columns',
      'fields' => 
      array (
        'image_1' => 
        array (
          'field' => 'image_1',
          'display_name' => 'Column 1: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_1_1' => 
        array (
          'field' => 'br_1_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_1' => 
        array (
          'field' => 'title_1',
          'display_name' => 'Column 1: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_1' => 
        array (
          'field' => 'content_1',
          'display_name' => 'Column 1: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_1_2' => 
        array (
          'field' => 'br_1_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_1' => 
        array (
          'field' => 'button_text_1',
          'display_name' => 'Button Column 1: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_1' => 
        array (
          'field' => 'link_1',
          'display_name' => 'Column 1: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_1_3' => 
        array (
          'field' => 'br_1_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'image_2' => 
        array (
          'field' => 'image_2',
          'display_name' => 'Column 2: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_2_1' => 
        array (
          'field' => 'br_2_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_2' => 
        array (
          'field' => 'title_2',
          'display_name' => 'Column 2: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_2' => 
        array (
          'field' => 'content_2',
          'display_name' => 'Column 2: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_2_2' => 
        array (
          'field' => 'br_2_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_2' => 
        array (
          'field' => 'button_text_2',
          'display_name' => 'Button Column 2: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_2' => 
        array (
          'field' => 'link_2',
          'display_name' => 'Column 2: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_2_3' => 
        array (
          'field' => 'br_2_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'cards_three_columns' => 
    array (
      'name' => 'Cards - 3 Column/s',
      'template' => 'voyager-page-blocks::blocks.cards_three_columns',
      'fields' => 
      array (
        'image_1' => 
        array (
          'field' => 'image_1',
          'display_name' => 'Column 1: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_1_1' => 
        array (
          'field' => 'br_1_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_1' => 
        array (
          'field' => 'title_1',
          'display_name' => 'Column 1: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_1' => 
        array (
          'field' => 'content_1',
          'display_name' => 'Column 1: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_1_2' => 
        array (
          'field' => 'br_1_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_1' => 
        array (
          'field' => 'button_text_1',
          'display_name' => 'Button Column 1: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_1' => 
        array (
          'field' => 'link_1',
          'display_name' => 'Column 1: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_1_3' => 
        array (
          'field' => 'br_1_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'image_2' => 
        array (
          'field' => 'image_2',
          'display_name' => 'Column 2: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_2_1' => 
        array (
          'field' => 'br_2_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_2' => 
        array (
          'field' => 'title_2',
          'display_name' => 'Column 2: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_2' => 
        array (
          'field' => 'content_2',
          'display_name' => 'Column 2: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_2_2' => 
        array (
          'field' => 'br_2_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_2' => 
        array (
          'field' => 'button_text_2',
          'display_name' => 'Button Column 2: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_2' => 
        array (
          'field' => 'link_2',
          'display_name' => 'Column 2: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_2_3' => 
        array (
          'field' => 'br_2_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'image_3' => 
        array (
          'field' => 'image_3',
          'display_name' => 'Column 3: Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_3_1' => 
        array (
          'field' => 'br_3_1',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'title_3' => 
        array (
          'field' => 'title_3',
          'display_name' => 'Column 3: Title',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Changing the World!',
        ),
        'content_3' => 
        array (
          'field' => 'content_3',
          'display_name' => 'Column 3: Content',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
        ),
        'br_3_2' => 
        array (
          'field' => 'br_3_2',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'button_text_3' => 
        array (
          'field' => 'button_text_3',
          'display_name' => 'Button Column 3: Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'link_3' => 
        array (
          'field' => 'link_3',
          'display_name' => 'Column 3: Link',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_3_3' => 
        array (
          'field' => 'br_3_3',
          'display_name' => 'Line break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'image_row' => 
    array (
      'name' => 'Row of Images',
      'template' => 'voyager-page-blocks::blocks.image_row',
      'fields' => 
      array (
        'title' => 
        array (
          'field' => 'title',
          'display_name' => 'Person',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Our Partners',
        ),
        'sub_title' => 
        array (
          'field' => 'sub_title',
          'display_name' => 'Sub Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'The glue that keeps our company thriving.',
        ),
        'image_1' => 
        array (
          'field' => 'image_1',
          'display_name' => 'Image 1',
          'type' => 'image',
          'required' => 0,
        ),
        'link_1' => 
        array (
          'field' => 'link_1',
          'display_name' => 'Link for Image 1',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_1' => 
        array (
          'field' => 'br_1',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image_2' => 
        array (
          'field' => 'image_2',
          'display_name' => 'Image 2',
          'type' => 'image',
          'required' => 0,
        ),
        'link_2' => 
        array (
          'field' => 'link_2',
          'display_name' => 'Link for Image 2',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_2' => 
        array (
          'field' => 'br_2',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image_3' => 
        array (
          'field' => 'image_3',
          'display_name' => 'Image 3',
          'type' => 'image',
          'required' => 0,
        ),
        'link_3' => 
        array (
          'field' => 'link_3',
          'display_name' => 'Link for Image 3',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_3' => 
        array (
          'field' => 'br_3',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image_4' => 
        array (
          'field' => 'image_4',
          'display_name' => 'Image 4',
          'type' => 'image',
          'required' => 0,
        ),
        'link_4' => 
        array (
          'field' => 'link_4',
          'display_name' => 'Link for Image 4',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_4' => 
        array (
          'field' => 'br_4',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image_5' => 
        array (
          'field' => 'image_5',
          'display_name' => 'Image 5',
          'type' => 'image',
          'required' => 0,
        ),
        'link_5' => 
        array (
          'field' => 'link_5',
          'display_name' => 'Link for Image 5',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_5' => 
        array (
          'field' => 'br_5',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image_6' => 
        array (
          'field' => 'image_6',
          'display_name' => 'Image 6',
          'type' => 'image',
          'required' => 0,
        ),
        'link_6' => 
        array (
          'field' => 'link_6',
          'display_name' => 'Link for Image 6',
          'type' => 'text',
          'required' => 0,
          'placeholder' => '',
        ),
        'br_6' => 
        array (
          'field' => 'br_6',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
    'testimonial' => 
    array (
      'name' => 'Testimonial',
      'template' => 'voyager-page-blocks::blocks.testimonial',
      'fields' => 
      array (
        'content' => 
        array (
          'field' => 'content',
          'display_name' => 'Testimonial Content',
          'type' => 'text_area',
          'required' => 1,
          'placeholder' => 'Company X is both attractive and highly adaptable. Company X has really helped our business thrive - I can\'t wait to see what comes next for us.',
        ),
        'title' => 
        array (
          'field' => 'title',
          'display_name' => 'Person',
          'type' => 'text',
          'required' => 1,
          'placeholder' => 'John Smith',
        ),
        'sub_title' => 
        array (
          'field' => 'sub_title',
          'display_name' => 'Sub Text',
          'type' => 'text',
          'required' => 0,
          'placeholder' => 'Founder &amp; CEO',
        ),
        'br_1' => 
        array (
          'field' => 'br_1',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'image' => 
        array (
          'field' => 'image',
          'display_name' => 'Image',
          'type' => 'image',
          'required' => 0,
        ),
        'br_2' => 
        array (
          'field' => 'br_2',
          'display_name' => 'Line Break',
          'partial' => 'break',
        ),
        'spaces' => 
        array (
          'field' => 'spaces',
          'display_name' => 'Add Vertical Space',
          'type' => 'select_dropdown',
          'required' => 0,
          'details' => 
          array (
            'options' => 
            array (
              0 => 'Bottom',
              1 => 'Top',
              2 => 'Top & Bottom',
              3 => 'None',
            ),
          ),
          'placeholder' => 0,
        ),
        'animate' => 
        array (
          'field' => 'animate',
          'display_name' => 'Animate this block (in)?',
          'type' => 'checkbox',
          'placeholder' => 'on',
          'required' => 0,
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'scout' => 
  array (
    'tntsearch' => 
    array (
      'storage' => 'C:\\xampp\\htdocs\\kiranbroker\\storage',
      'fuzziness' => true,
      'fuzzy' => 
      array (
        'prefix_length' => 2,
        'max_expansions' => 50,
        'distance' => 2,
      ),
      'asYouType' => false,
      'searchBoolean' => false,
      'searchableModels' => 
      array (
        0 => '\\Pvtl\\VoyagerPageBlocks\\Page',
        1 => '\\Pvtl\\VoyagerFrontend\\Page',
        2 => '\\Pvtl\\VoyagerFrontend\\BlogPost',
      ),
    ),
    'driver' => 'tntsearch',
    'prefix' => '',
    'queue' => false,
    'after_commit' => false,
    'chunk' => 
    array (
      'searchable' => 500,
      'unsearchable' => 500,
    ),
    'soft_delete' => false,
    'identify' => false,
    'algolia' => 
    array (
      'id' => '',
      'secret' => '',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kiranbroker\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\kiranbroker\\storage\\framework\\views',
  ),
  'voyager' => 
  array (
    'user' => 
    array (
      'add_default_role_on_register' => true,
      'default_role' => 'user',
      'default_avatar' => 'users/default.png',
      'redirect' => '/admin',
    ),
    'controllers' => 
    array (
      'namespace' => 'TCG\\Voyager\\Http\\Controllers',
    ),
    'models' => 
    array (
      'namespace' => 'App\\Models\\',
    ),
    'storage' => 
    array (
      'disk' => 'public',
    ),
    'hidden_files' => false,
    'database' => 
    array (
      'tables' => 
      array (
        'hidden' => 
        array (
          0 => 'migrations',
          1 => 'data_rows',
          2 => 'data_types',
          3 => 'menu_items',
          4 => 'password_resets',
          5 => 'permission_role',
          6 => 'settings',
        ),
      ),
      'autoload_migrations' => true,
    ),
    'multilingual' => 
    array (
      'enabled' => false,
      'default' => 'en',
      'locales' => 
      array (
        0 => 'en',
      ),
    ),
    'dashboard' => 
    array (
      'navbar_items' => 
      array (
        'voyager::generic.profile' => 
        array (
          'route' => 'voyager.profile',
          'classes' => 'class-full-of-rum',
          'icon_class' => 'voyager-person',
        ),
        'voyager::generic.home' => 
        array (
          'route' => '/',
          'icon_class' => 'voyager-home',
          'target_blank' => true,
        ),
        'voyager::generic.logout' => 
        array (
          'route' => 'voyager.logout',
          'icon_class' => 'voyager-power',
        ),
      ),
      'widgets' => 
      array (
      ),
    ),
    'bread' => 
    array (
      'add_menu_item' => true,
      'default_menu' => 'admin',
      'add_permission' => true,
      'default_role' => 'admin',
    ),
    'primary_color' => '#22A7F0',
    'show_dev_tips' => true,
    'additional_css' => 
    array (
    ),
    'additional_js' => 
    array (
    ),
    'googlemaps' => 
    array (
      'key' => '',
      'center' => 
      array (
        'lat' => '32.715738',
        'lng' => '-117.161084',
      ),
      'zoom' => 11,
    ),
    'settings' => 
    array (
      'cache' => false,
    ),
    'compass_in_production' => false,
    'media' => 
    array (
      'allowed_mimetypes' => '*',
      'path' => '/',
      'show_folders' => true,
      'allow_upload' => true,
      'allow_move' => true,
      'allow_delete' => true,
      'allow_create_folder' => true,
      'allow_rename' => true,
    ),
  ),
  'voyager-forms' => 
  array (
    'available_inputs' => 
    array (
      'text' => 'Text',
      'number' => 'Number',
      'email' => 'Email',
      'text_area' => 'Text Area',
      'checkbox' => 'Checkbox',
      'select' => 'Select',
      'radio' => 'Radio',
      'file' => 'File',
      'submit' => 'Submit',
      'group' => 'Group',
    ),
  ),
  'voyager-hooks' => 
  array (
    'enabled' => true,
    'add-route' => true,
    'add-hook-menu-item' => true,
    'add-hook-permissions' => true,
    'publish-vendor-files' => true,
  ),
  'laravel-widgets' => 
  array (
    'use_jquery_for_ajax_calls' => false,
    'route_middleware' => 
    array (
      0 => 'web',
    ),
    'widget_stub' => 'vendor/arrilot/laravel-widgets/src/Console/stubs/widget.stub',
    'widget_plain_stub' => 'vendor/arrilot/laravel-widgets/src/Console/stubs/widget_plain.stub',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'voyager-frontend' => 
  array (
    'title' => 'Pvtl/VoyagerFrontend',
  ),
  'sitemap' => 
  array (
    'guzzle_options' => 
    array (
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ),
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => 'Spatie\\Sitemap\\Crawler\\Profile',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
