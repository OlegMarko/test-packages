<?php

Route::get('calculator', 'OMarko\Calculator\CalculatorController@index');
Route::get('add/{a}/{b}', 'OMarko\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'OMarko\Calculator\CalculatorController@subtract');