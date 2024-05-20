<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function index()
    {
        $results = DB::table('students')->get();

        return view('index', compact('results'));
    } 
    public function create()
    {
         return view('student-add');
    } 
    public function store( Request $request)
    {
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     // ... other validation rules ...
        //   ]);
        $results=  DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'phone_number' => $request->phone,
            'city' => $request->city,
          ]);
         
        
          return redirect()->route('student.index')->with('success', 'Student created successfully!');
    } 
    public function edit()
    {
         return view('edit');
    } 

    public function remove()
    {
         return view('index');
    } 


}
