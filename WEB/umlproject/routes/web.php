<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UMLController ; 


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
    return view('welcome');
});
Route::match(['GET','POST'],'/login',[UMLController::class,'login'])->name('login');
Route::match(['GET','POST'],'/verification',[UMLController::class,'verification'])->name('verification');
Route::match(['GET','POST'],'/inscription/{id}',[UMLController::class,'inscription'])->name('inscription');
Route::match(['GET','POST'],'/preinscription/{id}',[UMLController::class,'preinscription'])->name('preinscription');
Route::match(['GET','POST'],'/recu',[UMLController::class,'recu'])->name('recu');
Route::match(['GET','POST'],'/ajouterpreinscription/{id}',[UMLController::class,'ajouterpreinscription'])->name('ajouterpreinscription');
Route::match(['GET','POST'],'/preinscriptionsuivant/{id}',[UMLController::class,'preinscriptionsuivant'])->name('preinscriptionsuivant');
Route::match(['GET','POST'],'/downloadpdf',[UMLController::class,'downloadpdf'])->name('downloadpdf');
Route::match(['GET','POST'],'/ajouterfiles/{id}',[UMLController::class,'ajouterfiles'])->name('ajouterfiles');
Route::match(['GET','POST'],'/testpage',[UMLController::class,'testpage'])->name('testpage');
Route::match(['GET','POST'],'/recupreinscription/{id}',[UMLController::class,'recupreinscription'])->name('recupreinscription');
Route::match(['GET','POST'],'/acceuil/{id}',[UMLController::class,'acceuil'])->name('acceuil');
Route::match(['GET','POST'],'/index',[UMLController::class,'index'])->name('index');
Route::match(['GET','POST'],'/candidature/{id}',[UMLController::class,'candidature'])->name('candidature');
Route::match(['GET','POST'],'/ajoutercandidature/{id}',[UMLController::class,'ajoutercandidature'])->name('ajoutercandidature');
Route::match(['GET','POST'],'/candidaturesuivant/{id}',[UMLController::class,'candidaturesuivant'])->name('candidaturesuivant');
