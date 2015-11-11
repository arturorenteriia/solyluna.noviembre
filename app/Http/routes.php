<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


	Route::get('/', 'NavigationController@welcome');

	Route::post('vistas', [
			'as' => 'vistas.vistapropiedad',
			'uses'=> 'VistasController@vistapropiedad'
		]
	);

	Route::post('vista', [
			'as' => 'vista.gastronomy',
			'uses'=> 'VistasController@gastronomy'
		]
	);

	Route::get('gastronomy', 'GastronomyController@addchef');
	Route::get('casasassisting', 'vistasController@casasassisting');
	Route::get('gastronomy', 'vistasController@gastronomy');


	Route::get('home', 'HomeController@index');

	Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
	]);

	Route::get('contacto', function(){
		return view('contacto');
	});

	Route::get('heredado', function(){
		return view('heredado');
	});

	//enviar un e-mail
	Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
	//cambiar password
	Route::post('reset_password', ['as' => 'reset_password', 'uses' => 'PasswordsController@reset_password'] );
	//navegacion
	Route::get('welcome', 'NavigationController@welcome');
	Route::get('independent', 'NavigationController@independent');
	Route::get('assisting', 'NavigationController@assisted');
	Route::get('memorycare', 'NavigationController@memory');
	Route::get('memorycare', 'NavigationController@memory');
	Route::get('change', ['as' => 'change', 'uses' => 'PasswordsController@change'] );
	Route::get('casasassisting', 'vistasController@casasassisting');

	Route::get('memoryhouses', 'NavigationController@memoryhouses');
	Route::get('independenthouses', 'NavigationController@independenthouses');

	Route::get('plantillasimple', function () {
		return view('plantillasimple');
	});
	Route::get('Icasas', function () {
		return view('Icasas');
	});
	Route::get('casasayulita', function () {
		return view('casasayulita');
	});
	Route::get('tecnologia', function () {
		return view('tecnologia');
	});
	Route::get('healthcare', function () {
		return view('healthcare');
	});
	Route::get('amenities', function () {
		return view('amenities');
	});
	Route::get('gacasasayulita', function () {
		return view('gacasasayulita');
	});
	Route::get('casabusqueda', function () {
		return view('casabusqueda');
	});
	Route::get('busqueda', function () {
		return view('busqueda');
	});
	Route::get('casaconchaschinas', function () {
		return view('casaconchaschinas');
	});
	Route::get('casamemorycare', function () {
		return view('casamemorycare');
	});
	Route::get('residenciaamapa', function () {
		return view('residenciaamapa');
	});
	Route::get('Acasas', function () {
		return view('Acasas');
	});
	Route::get('formulario', function () {
		return view('formulario');
	});
	Route::get('Mcasas', function () {
		return view('Mcasas');
	});
	Route::get('makeyourmenu', function () {
		return view('makeyourmenu');
	});
	Route::get('formulario', [
		'as' => 'form_path',
	]);

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function (){
		Route::resource('users', 'UsersController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Property'], function (){
		Route::resource('properties', 'PropertiesController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Bedroom'], function (){
		Route::resource('bedrooms', 'BedRoomController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Bedroom'], function (){
		Route::resource('properties.bedrooms', 'BedRoomController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Administrator'], function (){
		Route::resource('control', 'AdminController');
	});
	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'ameneties'], function (){
		Route::resource('ameneties', 'AmenetiesController');
	});

		Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Characteristic'], function (){
		Route::resource('properties.characteristic', 'CharacteristicsController');
		Route::resource('characteristic', 'CharacteristicsController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Images'], function (){
		Route::resource('images', 'ImagesController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Chef'], function (){
		Route::resource('properties.chef', 'GastronomyController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Chef'], function (){
		Route::resource('chef', 'GastronomyController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'EditText'], function (){
		Route::resource('text', 'EditTextController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'EditIndependent'], function (){
		Route::resource('text.independent', 'EditIndependentTextController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'],  'namespace' => 'EditAssisted'], function (){
		Route::resource('text.assisted', 'EditAssistedTextController');
	});

	Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'EditMemory'], function (){
		Route::resource('text.memory', 'EditMemoryTextController');
	});
