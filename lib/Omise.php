<?php
require_once dirname(__FILE__).'/omise/OmiseAccount.php';
require_once dirname(__FILE__).'/omise/OmiseBalance.php';

$object = OmiseAccount::retrive('pkey_test_4y9cewl0s1osh44ouud', 'skey_test_4y9cewl0rgwji2kbbcb');
$object->reload();

var_dump($object);


$object = OmiseBalance::retrive('pkey_test_4y9cewl0s1osh44ouud', 'skey_test_4y9cewl0rgwji2kbbcb');
$object->reload();

var_dump($object);