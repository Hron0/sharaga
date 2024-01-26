<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    public function showPage()
    {
        $res = 'yes';
        try {
            DB::connection()->getPdo();
            return view('example', [$res => 'Succesfully connected!']);
        } catch (\Exception $e) {
            return view('example', [$res => 'Some error: ' . $e]);
        }
    }
}
