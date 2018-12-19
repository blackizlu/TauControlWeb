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

Auth::routes();

Route::domain('dashboard.' . env('APP_DOMAIN'))->middleware('auth')->group(function (){
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');


    //MODULO USUARIOS
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Dashboard\UsersController@index')->name('dashboard.users.index');
        Route::get('/add', 'Dashboard\UsersController@add')->name('dashboard.users.add');
        Route::get('/{id}/edit', 'Dashboard\UsersController@edit')->name('dashboard.users.edit');
        Route::post('/', 'Dashboard\UsersController@store')->name('dashboard.users.store');
        Route::put('/{id}/update', 'Dashboard\UsersController@update')->name('dashboard.users.update');
        Route::delete('/{id}/delete', 'Dashboard\UsersController@destroy')->name('dashboard.users.delete');
    });

    //MODULO CLIENTES
    Route::group(['prefix' =>'clients'], function (){
        Route::get('/', 'Dashboard\ClientsController@index')->name('dashboard.clients.index');
        Route::get('/add', 'Dashboard\ClientsController@add')->name('dashboard.clients.add');
        Route::get('/{id}/view', 'Dashboard\ClientsController@view')->name('dashboard.clients.view');
        Route::get('/{id}/edit', 'Dashboard\ClientsController@edit')->name('dashboard.clients.edit');
        Route::post('/', 'Dashboard\ClientsController@store')->name('dashboard.clients.store');
        Route::put('/{id}/update', 'Dashboard\ClientsController@update')->name('dashboard.clients.update');
        Route::delete('/{id}/delete', 'Dashboard\ClientsController@destroy')->name('dashboard.clients.delete');

    });

    //MODULO CONTACTOS
    Route::group(['prefix' =>'contacts'], function (){
        Route::get('/', 'Dashboard\ContactsController@index')->name('dashboard.contacts.index');
        Route::get('/add', 'Dashboard\ContactsController@add')->name('dashboard.contacts.add');
        Route::get('/{id}/edit', 'Dashboard\ContactsController@edit')->name('dashboard.contacts.edit');
        Route::post('/', 'Dashboard\ContactsController@store')->name('dashboard.contacts.store');
        Route::put('/{id}/update', 'Dashboard\ContactsController@update')->name('dashboard.contacts.update');
        Route::delete('/{id}/delete', 'Dashboard\ContactsController@destroy')->name('dashboard.contacts.delete');
    });

    //MODULO PROYECTOS
    Route::group(['prefix' =>'projects'], function (){
        Route::get('/', 'Dashboard\ProjectsController@index')->name('dashboard.projects.index');
        Route::get('/add', 'Dashboard\ProjectsController@add')->name('dashboard.projects.add');
        Route::get('/{id}/view', 'Dashboard\ProjectsController@view')->name('dashboard.projects.view');
        Route::get('/{id}/edit', 'Dashboard\ProjectsController@edit')->name('dashboard.projects.edit');
        Route::post('/', 'Dashboard\ProjectsController@store')->name('dashboard.projects.store');
        Route::put('/{id}/update', 'Dashboard\ProjectsController@update')->name('dashboard.projects.update');
        Route::delete('/{id}/delete', 'Dashboard\ProjectsController@destroy')->name('dashboard.projects.delete');
    });

    //MODULO COTIZACIONES
    Route::group(['prefix' =>'cotizaciones'], function (){
        Route::get('/', 'Dashboard\CotizacionesController@index')->name('dashboard.cotizaciones.index');
        Route::get('/add', 'Dashboard\CotizacionesController@add')->name('dashboard.cotizaciones.generate');
        Route::post('/', 'Dashboard\CotizacionesController@store')->name('dashboard.cotizaciones.store');
        Route::get('/categories', 'Dashboard\CategoryController@view')->name('dashboard.cotizaciones.categories');
        Route::delete('/{id}/delete', 'Dashboard\CotizacionesController@destroy')->name('dashboard.cotizaciones.delete');


    });
    //MODULO COTIZACIONES/ PDF
    Route::get('/invoice/{id}/print', 'Dashboard\PricesController@pdf');


    //MODULO CATEGORIAS
    Route::group(['prefix' =>'categories'], function (){
        Route::post('/', 'Dashboard\CategoryController@store')->name('dashboard.categories.store');
        Route::put('/{id}/update', 'Dashboard\CategoryController@update')->name('dashboard.categories.update');
        Route::delete('/delete/{id}', 'Dashboard\CategoryController@destroy')->name('dashboard.categories.delete');

    });

    //MODULO ACTIVIDADES
    Route::group(['prefix' =>'activities'], function (){
        Route::get('/', 'Dashboard\ActivitiesController@index')->name('dashboard.activities.index');
        Route::get('/add', 'Dashboard\ActivitiesController@add')->name('dashboard.activities.add');
        Route::get('/{id}/view', 'Dashboard\ActivitiesController@view')->name('dashboard.activities.view');
        Route::get('/{id}/edit', 'Dashboard\ActivitiesController@edit')->name('dashboard.activities.edit');
        Route::post('/', 'Dashboard\ActivitiesController@store')->name('dashboard.activities.store');
        Route::put('/{id}/update','Dashboard\ActivitiesController@update')->name('dashboard.activities.update');
        Route::delete('/deleted', 'Dashboard\ActivitiesController@destroy')->name('dashboard.activities.delete');


        Route::get('/get/{id}', 'Dashboard\ActivitiesController@getContacts')->name('activities.getContacts');

    });

    Route::group(['prefix' =>'bitacora'], function (){
        Route::get('/', 'Dashboard\BitacoraController@index')->name('dashboard.bitacora.index');
    });
    Route::group(['prefix' =>'reportes'], function (){
        Route::get('/', 'Dashboard\ReportesController@index')->name('dashboard.reportes.index');
    });

});

Route::get('/', function () {
    return view('main.home');
})->name('main.home');

Route::get('/nosotros', function () {
    return view('main.us');
})->name('main.us');

Route::get('/soluciones', function () {
    return view('main.solutions');
})->name('main.solutions');

Route::get('/casos-de-exito/{name}', function ($name) {
    $objectives = "";
    $solutions = "";
    $products = "";
    $result = "";
    $img = "";
    $title = "";

    switch ($name) {
        case 'fiat-chrysler':
            $objectives = "La planta se encontraba en operación constante, lo cual fue en reto para el equipo la instalación del sistema de detección de incendio. Se tuvo que hacer la instalación dentro del programa estipulado solamente trabajando en los paros de planta (sábado 6pm a domingo 6am). Fue todo un reto, pero al final se cumplió el compromiso.";
            $solutions = "Instalación de sistema de detección de incendio y sistema de Voceo dentro de la planta";
            $products = "FAS: Honeywell <br>Sistema Voceo: Notifer y Wheelock";
            $result = "La planta cumplió las altas normas de seguridad del equipo de Bomberos y Protección Civil.";
            $img = "fca.jpeg";
            $title = "Fiat Chrysler.";

            break;

        case 'corporativo-crocsa':
            $objectives = "Las necesidades de un cliente restaurantero siempre serán estrictas, por lo que nos solicito sistema de circuito cerrado, alarma de intrusión, y audio y video ambiental.";
            $solutions = "Se comenzó instalando 12 cámaras cubriendo; área común, cocina, almacén y pasillos, así mismo se instalo un sistema de alarma de intrusión para aumentar la seguridad. Referente a Multimedia se instalo una matriz para poder observar la misma ó diferente programación en las 8 teles del restaurante al igual que audio ambiental por zonas. ";
            $products = "CCTV: HIKVISION <br>AUDIO y VIDEO: STROM WIRE";
            $result = "Cliente satisfecho.";
            $img = "comanches.jpg";
            $title = "Los Comanches Monterrey.";


            break;

        case 'departamento-torre-sofia':
            $objectives = "Cubrir con redes inalámbricas la totalidad del departamento e instalar Audio y Video distribuido. ";
            $solutions = "Se comenzó por instalar una red de voz y datos al igual que una red inalámbrica que cubrió toda la propiedad. Se integro al la red; Audio, Video, iluminación, circuito cerrado en el perímetro, control de portones y entrada principal, todas estas funciones quedaron en control de los usuarios deseados dentro de la familia en sus smart phones y tablets.";
            $products = "Conmutador: GRANDSTREAM<br>Redes: Ubiquity ";
            $result = "¡Familia Feliz!";
            $img = "torre.jpg";
            $title = "Departamento Torres Sofía.";


            break;

        case 'casa-particular':
            $objectives = "Proyecto familiar, en el cual se busco tener una integración de los diferente sistemas de una manera simple y fácil de utilizar.";
            $solutions = "Instalación de site con su respectivos Switches, access points, conmutador IP.";
            $products = "Audio: Bose y Bower & wilkins<br>Access Points: Ubiquity Unifi<br>Circuito Cerrado HIKVISION<br>Iluminación: Lutron, Tablets Amazon Fire HD";
            $result = "Cliente satisfecho.";
            $img = "casapriv.jpeg";
            $title = "Casa Particular.";


            break;

        case 'christus-muguerza':
            $objectives = "Los requerimientos solicitados fueron seguridad y control, cumpliendo con la norma NFPA.";
            $solutions = "Instalación de Panel Bosch para detección de incendio, con sensores de intrusión en puertas y ventanales. Así mismo se agrego un sistema de Voceo para hacer los llamados y avisos dentro del hospital. Instalación de 32 cámaras para supervisión y control de acceso de personal con lector biométrico. Se instalaron puertas automáticas de apertura para hacer los traslados de pacientes en pasillos y en quirófanos.";
            $products = "Panel BOSCH <br>Circuito Cerrado HIKVISION<br>Sistema de Voceo: VALCOM";
            $result = "Se cumplieron las expectativas del cliente, él cual se quedo con un sistema completo cumpliendo la especificación NFPA.";
            $img = "hospital.jpg";
            $title = "Hospital Christus Muguerza.";


            break;

        case 'superior-industries':
            $objectives = "Cumplimiento NORMA NFPA y Control de acceso.";
            $solutions = "Se instalo un Panel Notifier con sus respectivos dispositivos para cumplir con la norma NFPA. También se programo un acceso controlado para empleados así mismo portones automáticos en los accesos vehiculares.";
            $products = "NOTIFIER <br>HONEYWELL";
            $result = "Cliente satisfecho.";
            $img = "superior-industries.jpg";
            $title = "Superior Industries.";

            break;
    }

    return view('main.portfolio', compact('objectives', 'solutions', 'products', 'result', 'img', 'title'));

})->name('main.success.item');

Route::get('/casos-de-exito', function () {
    return view('main.success');
})->name('main.success');

Route::get('/contacto', function () {
    return view('main.contact');
})->name('main.contact');


