<?php

use App\core\App;
use App\core\database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
?>
