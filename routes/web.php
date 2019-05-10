<?php
use Illuminate\Http\Request;

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

Route::get('/', 'CaculatorController@index');

Route::post('/', function (Request $request) {
    $firstNumber = $request->firstNumber;
    $secondNumber = $request->secondNumber;
    $operator = $request->operator;
    if ($operator === 'Addition') {
        $result = $firstNumber + $secondNumber;
        return view('show', compact('firstNumber', 'secondNumber', 'result'));
    } else if ($operator === 'Substraction') {
        $result = $firstNumber - $secondNumber;
        return view('show', compact('firstNumber', 'secondNumber', 'result'));
    }
    else if ($operator === 'Multiply') {
        $result = $firstNumber * $secondNumber;
        return view('show', compact('firstNumber', 'secondNumber', 'result'));
    }
    else if ($operator === 'Division') {
        if($secondNumber ==0){
            return view('wrong_input');
        }
        else{
        $result = $firstNumber / $secondNumber;
        return view('show', compact('firstNumber', 'secondNumber', 'result'));}
    }
});
