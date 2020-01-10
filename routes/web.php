<?php



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/application', 'HomeController@app');

Route::view('/family','pages.family');
Route::view('/employment','pages.employment');

Route::get('upload','UploadController@index');
Route::post('store','UploadController@store');

Route::view('/travel','pages.travel');

Route::get('/view-application','VisaApplicationController@view');
Route::get('/view-application/edit/{id}', 'VisaApplicationController@edit');


Route::get('/verification','VisaApplicationController@verification');

Route::get('/status','VisaApplicationController@status');

Route::get('detail/{id}','VisaApplicationController@detail');
Route::post('/detail','VisaApplicationController@reply');


Route::get('/confirm','VisaApplicationController@confirm');
Route::post('/confirm','VisaApplicationController@store_application');

Route::get('/personal','VisaApplicationController@personal')->name('pages.personal');
Route::post('/personal','VisaApplicationController@store')->name('pages.personal');

Route::get('/downloadPDF/{id}','VisaApplicationController@pdf');

Route::view('/terms-&-condition', 'pages.term');
