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

Route::get('/', function () {
    return view('main.home');
})->name('main.home');

Route::get('/us', function () {
    return view('main.us');
})->name('main.us');

Route::get('/solutions', function () {
    return view('main.solutions');
})->name('main.solutions');

Route::get('/success-stories/{name}', function ($name) {
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
            $img = "FCA.jpeg";
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

Route::get('/success-stories', function () {
    return view('main.success');
})->name('main.success');

Route::get('/contact', function () {
    return view('main.contact');
})->name('main.contact');
