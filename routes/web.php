<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
   return view('tic2018.layout.mediapp');
});

Route::get('/mediapp', function () {
    return view('tic2018.layout.mediapp');
});
Route::get('/tic2017', function () {
    return view('tic2018.layout.tic2017');
});

Route::get('/tecno', function () {
    return view('tic2018.layout.tecno');
});


Route::get('/observar', function () {
    return view('tic2018.layout.observar');
});




Route::get('/producto', function () {
    return view('tic2018.layout.producto');
});


Route::get('/login', function () {
    return view('tic2018.layout.login');
});



Route::get('/register', function () {
    return view('tic2018.layout.register');
});


Route::get('/quien', function () {
    return view('tic2018.layout.quien');
});




Route::get('/dinero', function () {
    return view('tic2018.layout.dinero');
});


Route::get('/vista', function () {
    return view('tic2018.layout.vista');
});



Route::get('/1', function () {
    return view('tic2018.layout.1');
});




Route::get('/2', function () {
    return view('tic2018.layout.2');
});


Route::get('/3', function () {
    return view('tic2018.layout.3');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes





	
Route::get('/formRonda','HorarioRondaController@create');

Route::get('/formCuarto','asignacioncuartoController@create');
Route::get('/formInscripcion','InscripcionController@create');






Route::get('/Suscripcion','SuscripcionController@index')->name('Paquetes');

//Ruta de filtro
Route::get('/buscarHospitales','SuscripcionController@busquedaDatos');
Route::get('/buscarPaquetes','SuscripcionController@busquedaPaquetes');



Route::resource('user', 'UserController');
Route::resource('perfil', 'perfilController');
Route::resource('usuario', 'usuarioController');
Route::resource('permisos', 'PermisosController');
Route::resource('perfil-permisos', 'PerfilPermisosController');

//accesos

Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	
	//Users

		Route::post('users/store', 'UserController@store')->name('users.store')
		->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

		Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');
	
	//Paquete
	Route::post('paquete/store', 'PaqueteController@store')->name('paquete.store')
		->middleware('permission:paquete.create');

	Route::get('paquete', 'PaqueteController@index')->name('paquete.index')
		->middleware('permission:paquete.index');

	Route::get('paquete/create', 'PaqueteController@create')->name('paquete.create')
		->middleware('permission:paquete.create');

	Route::put('paquete/{paquete}', 'PaqueteController@update')->name('paquete.update')
		->middleware('permission:paquete.edit');

	Route::get('paquete/{paquete}', 'PaqueteController@show')->name('paquete.show')
		->middleware('permission:paquete.show');

	Route::delete('paquete/{paquete}', 'PaqueteController@destroy')->name('paquete.destroy')
		->middleware('permission:paquete.destroy');

	Route::get('paquete/{paquete}/edit', 'PaqueteController@edit')->name('paquete.edit')
		->middleware('permission:paquete.edit');

	//empleado
	Route::resource('empleado', 'empleadoController');

		//paciente
	Route::post('paciente/store', 'PacienteController@store')->name('paciente.store')
		->middleware('permission:paciente.create');

	Route::get('paciente', 'PacienteController@index')->name('paciente.index')
		->middleware('permission:paciente.index');

	Route::get('paciente/create', 'PacienteController@create')->name('paciente.create')
		->middleware('permission:paciente.create');

	Route::put('paciente/{paciente}', 'PacienteController@update')->name('paciente.update')
		->middleware('permission:paciente.edit');

	Route::get('paciente/{paciente}', 'PacienteController@show')->name('paciente.show')
		->middleware('permission:paciente.show');

	Route::delete('paciente/{paciente}', 'PacienteController@destroy')->name('paciente.destroy')
		->middleware('permission:paciente.destroy');

	Route::get('paciente/{paciente}/edit', 'PacienteController@edit')->name('paciente.edit')
		->middleware('permission:paciente.edit');


			//servicios
	Route::post('servicio/store', 'ServicioController@store')->name('servicio.store')
		->middleware('permission:servicio.create');

	Route::get('servicio', 'ServicioController@index')->name('servicio.index')
		->middleware('permission:servicio.index');

	Route::get('servicio/create', 'ServicioController@create')->name('servicio.create')
		->middleware('permission:servicio.create');

	Route::put('servicio/{servicio}', 'ServicioController@update')->name('servicio.update')
		->middleware('permission:servicio.edit');

	Route::get('servicio/{servicio}', 'ServicioController@show')->name('servicio.show')
		->middleware('permission:servicio.show');

	Route::delete('servicio/{servicio}', 'ServicioController@destroy')->name('servicio.destroy')
		->middleware('permission:servicio.destroy');

	Route::get('servicio/{servicio}/edit', 'ServicioController@edit')->name('servicio.edit')
		->middleware('permission:servicio.edit');

			//doctor
Route::resource('doctor', 'DoctorController');


			//especialidad
	Route::resource('area', 'AreaController');

			//area
	Route::resource('especialidad', 'EspecialidadController');

				//estatus
Route::resource('estatus', 'EstatusController');
		

					//hospital
	Route::post('hospital/store', 'hospitalController@store')->name('hospital.store')
		->middleware('permission:hospital.create');

	Route::get('hospital', 'hospitalController@index')->name('hospital.index')
		->middleware('permission:hospital.index');

	Route::get('hospital/hospital', 'hospitalController@create')->name('hospital.create')
		->middleware('permission:hospital.create');

	Route::put('hospital/{hospital}', 'hospitalController@update')->name('hospital.update')
		->middleware('permission:hospital.edit');

	Route::get('hospital/{hospital}', 'hospitalController@show')->name('hospital.show')
		->middleware('permission:hospital.show');

	Route::delete('hospital/{hospital}', 'hospitalController@destroy')->name('hospital.destroy')
		->middleware('permission:hospital.destroy');

	Route::get('hospital/{hospital}/edit', 'hospitalController@edit')->name('hospital.edit')
		->middleware('permission:hospital.edit');

		//piso
	Route::post('piso/store', 'PisoController@store')->name('piso.store')
		->middleware('permission:piso.create');

	Route::get('piso', 'PisoController@index')->name('piso.index')
		->middleware('permission:piso.index');

	Route::get('piso/piso', 'PisoController@create')->name('piso.create')
		->middleware('permission:piso.create');

	Route::put('piso/{piso}', 'PisoController@update')->name('piso.update')
		->middleware('permission:piso.edit');

	Route::get('piso/{piso}', 'PisoController@show')->name('piso.show')
		->middleware('permission:piso.show');

	Route::delete('piso/{piso}', 'PisoController@destroy')->name('piso.destroy')
		->middleware('permission:piso.destroy');

	Route::get('piso/{piso}/edit', 'PisoController@edit')->name('piso.edit')
		->middleware('permission:piso.edit');

			//cuarto
	
		Route::resource('cuarto', 'cuartoController');

			//pabellon

Route::resource('pabellon', 'PabellonController');
		//grafica

Route::get('grafica', 'GraficaController@grafica')->name('grafica')
		->middleware('permission:grafica');
		
Route::get('graficaPaciente', 'graficaPacienteController@graficaPaciente')->name('graficaPaciente')
		->middleware('permission:graficaPaciente');

Route::get('graficaEspecialidad', 'GraficaEspecialidadController@graficaEspecialidad')->name('graficaEspecialidad')
		->middleware('permission:graficaEspecialidad');	

Route::get('generoPaciente', 'GeneroPacienteController@generoPaciente')->name('generoPaciente')
		->middleware('permission:generoPaciente');		

		Route::get('/graficaPabellon','GraficapabController@create');	

//asignacioncuarto

Route::get('asignacioncuarto', 'AsignacionCuartoController@index')->name('asignacioncuarto')
		->middleware('permission:asignacioncuarto');

//horarioronda

Route::get('horarioronda', 'HorarioRondaController@index')->name('horarioronda')
		->middleware('permission:horarioronda');

	//Suscripcion

Route::get('Suscripcion', 'SuscripcionController@index')->name('Suscripcion')
		->middleware('permission:Suscripcion');

		//pdf

		
Route::get('listaDoctor', 'DoctorController@listaDoctor');
Route::get('listaEmpleado', 'empleadoController@listaEmpleado');
Route::get('listaPaciente', 'PacienteController@listaPaciente');
Route::get('listaServicio', 'ServicioController@listaServicio');
Route::get('listaEspecialidad', 'EspecialidadController@listaEspecialidad');
Route::get('listaArea', 'AreaController@listaArea');
Route::get('listaEstatus', 'EstatusController@listaEstatus');
Route::get('listaHospital', 'HospitalController@listaHospital');
Route::get('listaPiso', 'PisoController@listaPiso');
Route::get('listaCuarto', 'cuartoController@listaCuarto');
Route::get('listaPabellon', 'PabellonController@listaPabellon');

Route::get('listaSuscripciones', 'SuscripcionController@listaSuscripciones');
});

});

Route::resource('netflix', 'netflixController');