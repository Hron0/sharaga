<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function showCalc()
    {
        return view('discriminant.index');
    }

    public function calculate(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $discriminant = ($b * $b) - (4 * $a * $c);

        if ($discriminant > 0) {

            $x1 = ((-$b-sqrt($discriminant))/2*$a);
            $x2 = ((-$b+sqrt($discriminant))/2*$a);
            return view('discriminant.index', ['result' => "Два корня: x1 = " . $x1 . ", x2 = " . $x2]);
        } elseif ($discriminant == 0) {
            $result = - ($b / 2 * $a);
            return view('discriminant.index', ['result' => $result]);
        } elseif ($discriminant < 0) {
            return view('discriminant.index', ['result' => "Нет корней!"]);
        }
    }
}
