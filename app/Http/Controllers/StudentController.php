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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'phone' => 'required|numeric',
            'city' => 'required'
        ]);
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


          return redirect()->route('dashboard')->with('success', 'Student created successfully!');
    }
    public function edit( string $id)
    {  $results = DB::table('students')
        ->where('id', $id)
        ->first();
        return view ('edit', compact('results'));
    }
    public function update(Request $request, string $id)
    {  $results = DB::table('students')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'phone_number' => $request->phone,
            'city' => $request->city,
        ]);
        if ($results) {
            return redirect()->route('dashboard')->with('success', 'Student record updated successfully!');
        } else {
            return redirect()->route('dashboard')->with('error', 'Failed to update student record.');
        }
    }

    public function remove(string $id)
    {   $students=  DB::table('students')
                    ->where('id', $id)
                    ->delete();
        if ($students) {
            return redirect()->route('dashboard')->with('success', 'Student record deleted successfully!');
        } else {
            return redirect()->route('dashboard')->with('error', 'Failed to delete student record.');
        }
    }


}
