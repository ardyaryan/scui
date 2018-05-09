<?php

Route::get('/', function () {
    return View('home', ['page' => 'home']);
});

Route::get('/mission-visions-goals', function () {
    return View('mission_vision_goals', ['page' => 'mission']);
});

Route::get('/message', function () {
    return View('message', ['page' => 'message']);
});

Route::get('/programs-offered', function () {
    return View('programs_offered', ['page' => 'programs_offered']);
});

Route::get('/tuition-fee', function () {
    return View('tuition_fee', ['page' => 'tuition']);
});

Route::get('/payment-options', function () {
    return View('payment_options', ['page' => 'payment']);
});

Route::get('/directors', function () {
    return View('directors', ['page' => 'directors']);
});

Route::get('/bba', function () {
    return View('bba', ['page' => 'bba']);
});

Route::get('/mba', function () {
    return View('mba', ['page' => 'mba']);
});

Route::get('/accreditation', function () {
    return View('accreditation', ['page' => 'accreditation']);
});

Route::get('/scholarship', function () {
    return View('scholarship', ['page' => 'scholarship']);
});

Route::get('/contact', function () {
    return View('contact', ['page' => 'contact']);
});

Route::get('/e-learning/participants', function () {
    return View('e-learning', ['page' => 'e-learning', 'view' => 'portal.participants']);
});

Route::get('/e-learning', 'MainController@showELearning');
Route::post('login',     'MainController@login');
Route::get('logout',     'MainController@logout');
