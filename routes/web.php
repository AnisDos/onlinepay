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

Route::get('/',   'UserController@test');
Auth::routes(['verify' => true]);


Route::post('/send_mail', 'HomeController@mailsend');

Route::get('/admin',   'AdminController@index')->middleware('isadmin');
Route::get('/admin/exchange/{exchange}', 'AdminController@chekExchange')->middleware('isadmin');
Route::post('/admin/validateExchange',   'AdminController@validateExchange')->middleware('isadmin');
Route::post('/admin/abortExchange',   'AdminController@abortExchange')->middleware('isadmin');
Route::post('/admin/addBank',   'AdminController@storeBank')->middleware('isadmin');
Route::get('/admin/bank/{bank}', 'AdminController@showBank')->middleware('isadmin');
Route::get('/admin/chartBank', 'AdminController@chartBank')->middleware('isadmin');



Route::get('/admin/showExchangeInProgress',   'AdminController@showExchangeInProgress')->middleware('isadmin');
Route::get('/admin/showExchangeValidated',   'AdminController@showExchangeValidated')->middleware('isadmin');
Route::get('/admin/showCommentInProgress',   'AdminController@showCommentInProgress')->middleware('isadmin');
Route::get('/admin/showCommentApprouved',   'AdminController@showCommentApprouved')->middleware('isadmin');
Route::post('/admin/approuveComment', 'AdminController@approuveComment')->middleware('isadmin');
Route::get('/admin/addNewBankForm', 'AdminController@addNewBankForm')->middleware('isadmin');
Route::post('/admin/bloquerBank', 'AdminController@bloquerBank')->middleware('isadmin');
Route::post('/admin/debloquerBank', 'AdminController@debloquerBank')->middleware('isadmin');
Route::post('/admin/updateBankInfo', 'AdminController@updateBankInfo')->middleware('isadmin');













Route::post('/user/exchange', 'UserController@store')->middleware('auth');
Route::post('/user/addComment', 'UserController@addComment')->middleware('auth');
Route::post('/user/deleteComment', 'UserController@deleteComment')->middleware('auth');
Route::get('/user/profile', 'UserController@profile')->middleware('auth');
Route::get('/user/showUpdateInfo', 'UserController@showUpdateInfo')->middleware('auth');
Route::post('/user/update',   'UserController@update')->middleware('auth');
Route::get('/user/showUpdatePassword', 'UserController@showUpdatePassword')->middleware('auth');
Route::post('/user/changePassword','UserController@changePassword')->middleware('auth');
Route::get('/user/resendEmail', 'UserController@resendEmail')->middleware('auth');
Route::get('/user/posterAvis', 'UserController@posterAvis')->middleware('auth');
Route::get('/user/mesAvis', 'UserController@mesAvis')->middleware('auth');
Route::get('/user/transactions', 'UserController@transactions')->middleware('auth');







Route::get('/home', 'UserController@test');
Route::get('/devis', 'UserController@index');
Route::get('/devis1', 'UserController@index1');

Route::get('/test', 'UserController@test');






Route::post('/user/demandeVisaForm','Cart_requestController@demandeVisaForm')->middleware('auth');
Route::get('/user/etatDemande','Cart_requestController@etatDemande')->middleware('auth');
Route::post('/user/demandeVisaFormValidationFinale','Cart_requestController@demandeVisaFormValidationFinale')->middleware('auth');
Route::get('/user/demandeVisa', 'Cart_requestController@demandeVisa')->middleware('auth');

Route::get('/admin/showDemandeInProgress',   'Cart_requestController@showDemandeInProgress')->middleware('isadmin');
Route::post('/admin/validerDmVs','Cart_requestController@validerDmVs')->middleware('isadmin');
Route::get('/admin/showDemandeValidate',   'Cart_requestController@showDemandeValidate')->middleware('isadmin');
Route::get('/admin/demande/{demande}', 'Cart_requestController@chekDemande')->middleware('isadmin');
Route::post('/admin/validatedemande','Cart_requestController@validatedemande')->middleware('isadmin');
Route::post('/admin/abortdemande','Cart_requestController@abortdemande')->middleware('isadmin');
Route::get('/admin/showDemandeCalceled',   'Cart_requestController@showDemandeCalceled')->middleware('isadmin');






Route::get('/user/ReclamationVisa','ReclamationController@ReclamationVisa')->middleware('auth');
Route::get('/user/ReclamationExchange','ReclamationController@ReclamationExchange')->middleware('auth');
Route::post('/user/addReclamationVisa', 'ReclamationController@addReclamationVisa')->middleware('auth');
Route::post('/user/addReclamationExchange', 'ReclamationController@addReclamationExchange')->middleware('auth');
Route::get('/user/messageVisa/{id}','ReclamationController@getMessageVisa')->middleware('auth');
Route::get('/user/messageExchange/{id}','ReclamationController@getMessageExchange')->middleware('auth');
Route::post('/user/messageAdminVisa', 'ReclamationController@sendMessageAdminVisa')->middleware('auth');
Route::post('/user/messageAdminExchange', 'ReclamationController@sendMessageAdminExchange')->middleware('auth');


Route::get('/admin/adminReclamationVisa','ReclamationController@adminReclamationVisa')->middleware('isadmin');
Route::get('/admin/adminReclamationExchange','ReclamationController@adminReclamationExchange')->middleware('isadmin');
Route::get('/admin/reclamationMessenger','ReclamationController@reclamationMessenger')->middleware('isadmin');
Route::get('/admin/messageVisa/{id}','ReclamationController@getmessageVisa')->middleware('isadmin');
Route::get('/admin/messageExchange/{id}','ReclamationController@getmessageExchange')->middleware('isadmin');
Route::post('/admin/messageAdminVisa', 'ReclamationController@sendMessageAdminVisa')->middleware('isadmin');
Route::post('/admin/messageAdminExchange', 'ReclamationController@sendmessageAdminExchange')->middleware('isadmin');








//test facebook


//Route::get('/auth/redirect/{provider}', 'UserController@redirect');
//Route::get('/callback/{provider}', 'UserController@callback');






//Route::get('/auth/redirect/{provider}', 'UserController@redirect');
//Route::get('/callback/{provider}', 'UserController@callback');




Route::get('login/facebook/', 'UserController@redirect');
Route::get('login/facebook/callback/', 'UserController@callback');





Route::get('login/google/', 'UserController@redirectGoogle');
Route::get('login/google/callback/', 'UserController@callbackGoogle');
