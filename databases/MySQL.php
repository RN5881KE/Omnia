<?php
/**
 * Created by PhpStorm.
 * User: treyh
 * Date: 7/5/2018
 * Time: 7:19 PM
 */

class MySQL extends mysqli
{
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
    }
}

// TODO: I DON'T HAVE MYSQL INSTALLED ON MY PC, SO TYLER OR YUSUF, ONE OF YOU GUYS CAN SET UP A MYSQL DB TO USE

?>

}