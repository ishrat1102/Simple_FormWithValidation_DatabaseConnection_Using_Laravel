<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    public function index()
    {
        return view('TestForm');
    }
    public function view_form(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'bdate' => 'required',
                'password' => 'required',
                'cpass' => 'required|same:password'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
