<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('pages.authentication.register', [
        "title" => "Register Page"
    ]);
});

Route::get('m-choice', function () {
    return view('pages.quiz.multiple_choice', [
        "title" => "Multiple Choice"
    ]);
});