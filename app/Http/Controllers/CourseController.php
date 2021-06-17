<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Kelas;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataCourse = Course::all();
        return view('learning.home-learning', compact('dataCourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('learning.buat-learning')->with('kelass', $kelass);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check for correct role
        if(auth()->user()->role != 'Admin'){
            return redirect('/')->withErrors([
                'role' => 'The account is not authorized',
                ]);
        }

        $add_course = new Course;
        $add_course->course_name = $request->get('course_name');
        $add_course->course_desc = $request->get('course_desc');
        $add_course->enroll_key = $request->get('enroll_key');
        $add_course->list_kelas = request('list_kelas');
        $add_course->save();
        return redirect()->route('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function homeCourse()
    {
        // hapus session variable jika user sempat melakukan kuis sebelumnya
        Session::forget('numSoal');
        Session::forget('arrSoal');
        Session::forget('arrJawaban');
        Session::forget('cocokJawaban');
        Session::forget('totBenar');
        
        return view('learning.learning');
    }

    public function enrollCourse($id)
    {
        return view('learning.enroll');
    }

    public function viewCourse()
    {
        return view('learning.learning');
    }
}
