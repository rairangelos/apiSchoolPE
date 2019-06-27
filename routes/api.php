<?php

/*
$this->get('schools', 'Api\SchoolController@index');
$this->post('schools', 'Api\SchoolController@store');
$this->put('schools/{id}', 'Api\SchoolController@update');
$this->delete('schools/{id}', 'Api\SchoolController@destroy');
*/
$this->apiResource('schools', 'Api\SchoolController');