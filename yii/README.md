<p align="center">
    <a href="https://dutainformasi.net" target="_blank">
        <img src="https://s3-id-jkt-1.kilatstorage.id/cdn-dutainformasi/assets/img/logo.png" height="100px">
    </a>
    <h1 align="center">URL Shortener</h1>
    <br>
</p>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------
Clone this repo and create file ```config/db-local.php``` and ```config/params-local.php```

~~~
touch config/db-local.php
touch config/params-local.php
~~~

config/db-local.php
~~~php
<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=dbname',
    'username' => 'userdb',
    'password' => 'passwordbd',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
~~~

config/params-local.php
~~~php
<?php

return [
    'link_length' => 5,
];
~~~

Import tables with migrations command
~~~
php yii migration/up
~~~