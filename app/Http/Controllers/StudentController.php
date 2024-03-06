<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function add()
    {
        return view('pages.student.add');
    }

    public function store(Request $request)
    {
        $this->student->create($request->all());
        return redirect()
            ->back()
            ->with('success', 'your message,here');
    }

    public function index()
    {
        $response['students'] = $this->student->all();
        dd($response);
        $this->student->create($request->all());
    }
}
