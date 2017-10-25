<?php

namespace OMarko\Calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index() {
        echo 'Hello from the calculator package!';
    }

    /**
     * Return add
     *
     * @param $a
     * @param $b
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add($a, $b) {
        $result =  $a + $b;

        return view('calculator::add', compact('result'));
    }

    public function subtract($a, $b) {
        echo $a - $b;
    }
}
