<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/crud', function () {
//     return view('crud/index');
// });

// Route::get('/crud', function () {
    
//     $age = 33;
//     $data = ['name' => 'Luis', 'age' => $age];
//    //Revisar la vista Index.blade.php, informacion importante de el .blade
   
//     return view('crud/index', $data);
// })-> name('crud'); //Se utiliza para definir el nombre de la ruta y poder ser usado mas tarde en, por ejemplo un link.

// Route::get('/contact', function () { 
//     //return redirect('/contact2', 303); //primer formato para hacer las redirecciones
//     //return redirect()->route('contact2'); //segundo formato para hacer redirecciones
//     //return to_route('contact2'); //tercer formato para hacer redirecciones 
    
//     $age = 33;
//     $data = ['name' => 'Luis', 'age' => $age];

//     return view('contact', $data);
// })->name('contact');

// Route::get('/contact2', function () {
//     return view('contact2');
// })->name('contact2');

//---------------------------------------------------------//

//Route::get('test',[PrimerControlador::class,'index']);
//Route::resource('post', PrimerControlador::class); (Te habilita la funcion de GET, PUT, DELETE, etc. Puedes verlo en php artisan r:l)
//Route::get('otro/{post}/{otro}',[PrimerControlador::class, 'otro']); //Clase de parametros en las rutas

//---------------------------------------------------------//

route::resource('post', PostController::class);