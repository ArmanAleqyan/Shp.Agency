<?php

use App\Http\Controllers\AdminFunction\ContentFooterController;
use App\Http\Controllers\AdminFunction\ContentForControler;
use App\Http\Controllers\AdminFunction\ContentHeaderController;
use App\Http\Controllers\AdminFunction\ContentJobsController;
use App\Http\Controllers\AdminFunction\ContentMenuController;
use App\Http\Controllers\AdminFunction\ContentNineController;
use App\Http\Controllers\AdminFunction\ContentSevenController;
use App\Http\Controllers\AdminFunction\ContentThreeController;
use App\Http\Controllers\AdminFunction\ContentTwoController;
use App\Http\Controllers\AdminFunction\EventContentController;
use App\Http\Controllers\AdminFunction\FormContactusController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendMail2Controller;
use App\Http\Controllers\SendMail3Controller;
use App\Http\Controllers\SendMailController;
use App\Models\ContentNine;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login' , [LoginController::class, 'index'])->name('login');
Route::get('settings', [LoginController::class, 'settings'])->name('settings');
Route::post('loginsend' , [LoginController::class, 'login'])->name('loginsend');
Route::post('updateprofile', [LoginController::class, 'updateprofile'])->name('updateprofile');
Route::post('updatepassword', [LoginController::class, 'updatepassword'])->name('updatepassword');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
//Route::get('adminhome', [AdminHomeController::class, 'index'])->name('adminhome');
Route::post('sendemail', [SendMailController::class, 'send'])->name('sendemail');
Route::post('sendemail2', [SendMail2Controller::class, 'send'])->name('sendemail2');
Route::post('sendemail3', [SendMail3Controller::class, 'send'])->name('sendemail3');


Route::middleware(['AuthAdmin'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('adminhome', [AdminHomeController::class, 'index'])->name('adminhome');
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('admincontentheader', [ContentHeaderController::class, 'index'])->name('contentheader');
        Route::post('admincontentheaderpost',[ContentHeaderController::class, 'update'])->name('admincontentheaderpost');
/////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contenttwo', [ContentTwoController::class, 'index'])->name('contenttwo');
        Route::post('contenttwopost', [ContentTwoController::class, 'update'])->name('contenttwopost');
        /////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentfor', [ContentForControler::class, 'index'])->name('contentfor');
        Route::get('line1', [ContentForControler::class, 'line1'])->name('line1');
        Route::get('line2', [ContentForControler::class, 'line2'])->name('line2');
        Route::get('line3', [ContentForControler::class, 'line3'])->name('line3');
        Route::post('partnerheader', [ContentForControler::class, 'header'])->name('partnerheader');
        Route::post('createpartner', [ContentForControler::class, 'create'])->name('createpartner');
        Route::post('updatepartner/{id}', [ContentForControler::class, 'update'])->name('updatepartner');
        Route::get('deletepartner/{id}', [ContentForControler::class, 'delete'])->name('deletepartner');


        //////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentthree' , [ContentThreeController::class, 'index'])->name('contentthree');
        Route::post('contentthreepost' , [ContentThreeController::class, 'update'])->name('contentthreepost1');
        Route::post('contentthreepost2' , [ContentThreeController::class, 'update2'])->name('contentthreepost2');
        Route::post('contentthreepost3' , [ContentThreeController::class, 'update2'])->name('contentthreepost3');
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentseven', [ContentSevenController::class, 'index'])->name('contentseven');
        Route::post('contentsevenpost', [ContentSevenController::class, 'update'])->name('contentsevenpost');
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentnine', [ContentNineController::class, 'index'])->name('contentnine');
        Route::post('contentnine1', [ContentNineController::class, 'update1'])->name('contentnine1');
        Route::post('contentnine2', [ContentNineController::class, 'update2'])->name('contentnine2');
        Route::post('contentnine3', [ContentNineController::class, 'update3'])->name('contentnine3');
        Route::post('contentnine4', [ContentNineController::class, 'update4'])->name('contentnine4');
        Route::post('contentnine5', [ContentNineController::class, 'update5'])->name('contentnine5');
        Route::post('contentnine6', [ContentNineController::class, 'update6'])->name('contentnine6');
        Route::post('contentnine7', [ContentNineController::class, 'update7'])->name('contentnine7');
        Route::post('contentnine8', [ContentNineController::class, 'update8'])->name('contentnine8');
        Route::get('deletecontent1', [ContentNineController::class, 'delete1'])->name('deletecontent1');
        Route::get('deletecontent2', [ContentNineController::class, 'delete2'])->name('deletecontent2');
        Route::get('deletecontent3', [ContentNineController::class, 'delete3'])->name('deletecontent3');
        Route::get('deletecontent4', [ContentNineController::class, 'delete4'])->name('deletecontent4');
        Route::get('deletecontent5', [ContentNineController::class, 'delete5'])->name('deletecontent5');
        Route::get('deletecontent6', [ContentNineController::class, 'delete6'])->name('deletecontent6');
        Route::get('deletecontent7', [ContentNineController::class, 'delete7'])->name('deletecontent7');
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentjobs', [ContentJobsController::class, 'index'])->name('contentjobs');
        Route::post('contentjobsheaderpost1', [ContentJobsController::class,'update'])->name('contentjobsheaderpost1');
        Route::post('contentjobspost1', [ContentJobsController::class,'update1'])->name('contentjobspost1');
        Route::post('contentjobspost2', [ContentJobsController::class,'update2'])->name('contentjobspost2');
        Route::post('contentjobspost3', [ContentJobsController::class,'update3'])->name('contentjobspost3');
        Route::post('contentjobspost4', [ContentJobsController::class,'update4'])->name('contentjobspost4');
        Route::post('contentjobspost5', [ContentJobsController::class,'update5'])->name('contentjobspost5');
        Route::post('contentjobspost6', [ContentJobsController::class,'update6'])->name('contentjobspost6');
        Route::post('contentjobspost7', [ContentJobsController::class,'update7'])->name('contentjobspost7');

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentfooter', [ContentFooterController::class, 'index'])->name('contentfooter');
        Route::post('contentfooter1', [ContentFooterController::class, 'update1'])->name('contentfooter1');
        Route::post('contentfooter2', [ContentFooterController::class, 'update2'])->name('contentfooter2');
        Route::post('contentfooter3', [ContentFooterController::class, 'update3'])->name('contentfooter3');
        Route::post('contentfooter4', [ContentFooterController::class, 'update4'])->name('contentfooter4');
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentmenu', [ContentMenuController::class, 'index'])->name('contentmenu');
        Route::post('/contentmenupost/{id}', [ContentMenuController::class, 'update'])->name('contentmenupost');
        /////////////////////////////////////////////////////////////////////////////////////
        Route::get('contentemail', [ContentMenuController::class, 'updateemail'])->name('contentemail');
        Route::post('contentemailpost/{id}', [ContentMenuController::class, 'updateemailpost'])->name('contentemailpost');
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         Route::get('eventcontent', [EventContentController::class, 'index'])->name('eventcontent');
         Route::post('eventcontentcreate', [EventContentController::class, 'create'])->name('eventcontentcreate');
         Route::get('updateevent/{id}', [EventContentController::class, 'update'])->name('updateevent');
         Route::post('updateeventpost/{id}', [EventContentController::class, 'updatepost'])->name('updateeventpost');
         Route::get('deleteevent/{id}',[EventContentController::class, 'delete'])->name('deleteevent');
         Route::post('updateeventheader', [EventContentController::class, 'updateeventheader'])->name('updateeventheader');
         ///////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('formcontactus',[FormContactusController::class, 'index'])->name('formcontactus');
        Route::post('formcontactuspost', [FormContactusController::class, 'create'])->name('formcontactuspost');
        Route::post('formcontactuspost2', [FormContactusController::class, 'creates'])->name('formcontactuspost2');

    });

 });
