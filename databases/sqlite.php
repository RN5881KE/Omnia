<?php
/**
 * Created by PhpStorm.
 * User: treyh
 * Date: 7/4/2018
 * Time: 5:18 PM
 */

class SQLiteDB extends SQLite3
{
    function __construct()
    {
        $this->open('Omnia.db');
    }
}

?>


