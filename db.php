<?php 
    namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'www.db4free.net',
            'database' => 'recipesxpro',
            'username' => 'oscargm',
            'password' => '01311020osca'
        ]);
    }
?>