<?php
/**
 * Created by PhpStorm.
 * User: treyh
 * Date: 7/5/2018
 * Time: 7:57 PM
 */
require('lib/Semantics3.php');


/***
 * Class Semantic3
 * THIS WILL USE THE SEMANTIC3 PRODUCT API
 * YOU CAN FIND DOCS HERE: https://docs.semantics3.com/reference#about-the-api
 * OR FIND THE GITHUB REPOSITORY HERE: https://github.com/Semantics3
 */


class Semantic3
{
    private $apikey;
    private $apisecret;

    // SEMANTIC3 CONTSTRUCTOR INITIALIZED WITH THE APIKEY AND APISECRET
    function __construct($apikey=null,$apisecret=null) {
        $this->$apikey = $apikey;
        $this->$apisecret = $apisecret;

    }

}