<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('staff',  ['uses' => 'StaffController@showAllStaffs']);
    $router->get('staff/{id}', ['uses' => 'StaffController@showOneStaff']);
    $router->post('staff', ['uses' => 'StaffController@create']);
    $router->delete('staff/{id}', ['uses' => 'StaffController@delete']);
    $router->put('staff/{id}', ['uses' => 'StaffController@update']);

    $router->get('salutofc',  ['uses' => 'SalutOfcController@showAllOffices']);
    $router->get('salutofc/{id}', ['uses' => 'SalutOfcController@showOneOffice']);
    $router->post('salutofc', ['uses' => 'SalutOfcController@create']);
    $router->delete('salutofc/{id}', ['uses' => 'SalutOfcController@delete']);
    $router->put('salutofc/{id}', ['uses' => 'SalutOfcController@update']);

    $router->get('kabko',  ['uses' => 'KabKoController@showAllKabko']);
    $router->get('kabko/{id}', ['uses' => 'KabKoController@showOneKabko']);
    $router->post('kabko', ['uses' => 'KabKoController@create']);
    $router->delete('kabko/{id}', ['uses' => 'KabKoController@delete']);
    $router->put('kabko/{id}', ['uses' => 'KabKoController@update']);

    $router->get('prov',  ['uses' => 'ProvController@showAllProv']);
    $router->get('prov/{id}', ['uses' => 'ProvController@showOneProv']);
    $router->post('prov', ['uses' => 'ProvController@create']);
    $router->delete('prov/{id}', ['uses' => 'ProvController@delete']);
    $router->put('prov/{id}', ['uses' => 'ProvController@update']);

    $router->get('stafftipe',  ['uses' => 'StaffTipeController@showAllStaffTipe']);
    $router->get('stafftipe/{id}', ['uses' => 'StaffTipeController@showOneStaffTipe']);
    $router->post('stafftipe', ['uses' => 'StaffTipeController@create']);
    $router->delete('stafftipe/{id}', ['uses' => 'StaffTipeController@delete']);
    $router->put('stafftipe/{id}', ['uses' => 'StaffTipeController@update']);
    
    $router->get('minat',  ['uses' => 'MinatController@showAllMinat']);
    $router->get('minat/{id}', ['uses' => 'MinatController@showOneMinat']);
    $router->post('minat', ['uses' => 'MinatController@create']);
    $router->delete('minat/{id}', ['uses' => 'MinatController@delete']);
    $router->put('minat/{id}', ['uses' => 'MinatController@update']);

    $router->get('upbjj',  ['uses' => 'UpbjjController@showAllUpbjj']);
    $router->get('upbjj/{id}', ['uses' => 'UpbjjController@showOneUpbjj']);

    $router->get('lipstate',  ['uses' => 'LipStateController@showAllLipstate']);
    $router->get('lipstate/{id}', ['uses' => 'LipStateController@showOneLipstate']);

    $router->get('mbrstate',  ['uses' => 'MbrStateController@showAllMbrstate']);
    $router->get('mbrstate/{id}', ['uses' => 'MbrStateController@showOneMbrstate']);

    $router->get('prodi',  ['uses' => 'ProdiController@showAllProdi']);
    $router->get('prodi/{id}', ['uses' => 'ProdiController@showOneProdi']);

    $router->get('matkul',  ['uses' => 'MatkulController@showAllMatkul']);
    $router->get('matkul/{id}', ['uses' => 'MatkulController@showOneMatkul']);

    $router->get('masaregistrasi',  ['uses' => 'MasaRegistrasiController@showAllMasaRegistrasi']);
    $router->get('masaregistrasi/{id}', ['uses' => 'MasaRegistrasiController@showOneMasaRegistrasi']);
  });

