<?php
/**
 * Created by PhpStorm.
 * User: joy
 * Date: 11/6/14
 * Time: 8:47 PM
 */

include_once 'Eloquent.php';

Dummy::create([
    'username' => 'joycse06',
    'password' => md5('hello'),
    'role_id' => 1
]);

$dummy = Dummy::all()->first();

var_dump($dummy->toArray());

