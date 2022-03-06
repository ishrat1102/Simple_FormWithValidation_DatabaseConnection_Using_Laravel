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
        // echo "<pre>";
        // print_r($request->all());
    }
    public function store(Request $request)
    {

        echo "<pre>";
        print_r($request->all());
        $Demo_registration = new Demo_registration;
        $Demo_registration->name = $request['name'];
        $Demo_registration->email = $request['email'];
        $Demo_registration->gender = $request['gender'];
        $Demo_registration->phone = $request['phone'];
        $Demo_registration->dob = $request['dob'];
        $Demo_registration->password = md5($request['password']);
        $Demo_registration->nationality = $request['nationality'];
        $Demo_registration->hobby = $request['hobby'];
        $Demo_registration->save();
        return redirect('/register/view');
    }
    public function view()
    {
        $Demo_registration = Demo_registration::all();
        $data = compact('Demo_registration');
        return view('usersdetail')->with($data);
    }
    public function delete($user_id)
    {
        $Demo_registration = Demo_registration::find($user_id)->delete();
        return redirect()->back();
    }
    public function edit($user_id)
    {
        $Demo_registration = Demo_registration::find($user_id);
        if (is_null($Demo_registration)) {
            return redirect()->back();
        } else {
            $data = compact('Demo_registration');
            return view('UpdateForm')->with($data);
        }
    }
     public function update($user_id, Request $request)
    {
        echo "hghvjhj";
        $Demo_registration = Demo_registration::find($user_id);

        $Demo_registration->name = $request['name'];
        $Demo_registration->phone = $request['phone'];
        $Demo_registration->email = $request['email'];
        $Demo_registration->dob = $request['dob'];
        $Demo_registration->nationality = $request['nationality'];
        $Demo_registration->gender = $request['gender'];
        $Demo_registration->hobby = $request['hobby'];
        $Demo_registration->save();
        return redirect('/register/view');
    }
}
