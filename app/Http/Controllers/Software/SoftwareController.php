<?php

namespace App\Http\Controllers\Software;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function disorderTypes()
    {
        return view("theme::app/dissorder_types");
    }


    public function disorderDepression()
    {
        return view("theme::app/dissorder_types");
    }


    public function disorderTest($test)
    {
        // return $test;
        $questions = Questions::all();

        // return $questions;
        return view("theme::app/dissorder_test", compact('questions'));
    }
}
