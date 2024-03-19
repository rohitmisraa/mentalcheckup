<?php

namespace App\Http\Controllers\Software;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
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
        $questions = Questions::where("type", $test)->get();
        $doctors = Doctors::all();

        // return $questions;
        return view("theme::app/dissorder_test", compact('questions', 'doctors'));
    }


    public function chatbot()
    {
        // return $test;
        // $questions = Questions::all();

        // return $questions;
        return view("theme::app/chatbot");
    }

    public function privacyPolicy()
    {
        return view("theme::app/privacy");
    }

    public function termsnConditions()
    {
        return view("theme::app/terms");
    }
}
