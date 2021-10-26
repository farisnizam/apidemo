<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();

        $students->name = $request->input('name');
        $students->email = $request->input('email');
        $students->phone_no = $request->input('phone_no');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }

    public function show()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function showbyid($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updatebyid(Request $request, $id)
    {
        $students = Student::find($id);
        $students->name = $request->input('name');
        $students->email = $request->input('email');
        $students->phone_no = $request->input('phone_no');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }

    public function deletebyid(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();

        return response()->json($students);
    }

    public function login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $students = Student::where("name",$username)->where("password",$password)->first();

        return response()->json($students);
    }
}
