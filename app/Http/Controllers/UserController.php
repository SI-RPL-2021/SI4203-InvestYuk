<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserAndCourses;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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

    public function index()
    {
        return view('learning.enroll');
    }


    public function enrollCourse(Request $request)
    {

        $course = Course::findOrFail($request->id_course);
        $id_user =  session()->get('id');
        $enroll_key = $request->enroll_key;

        if ($enroll_key == $course['enroll_key']) {
            $enroll_course = new UserAndCourses;
            $enroll_course->course_name = $request->course_name;
            $enroll_course->id_course = $request->id_course; 
            $enroll_course->id_user = $id_user;
            $enroll_course->status = 1;
            $enroll_course->save();
            return redirect()->route('courses');
        } else {
            return redirect()->back();
        }
        
    }
    public function inputKey($id)
    {

        $data['data_course'] = Course::findOrFail($id);
        return view('learning.enroll')->with($data);

    }

    public function myCourse()
    {
        $id_user =  session()->get('id');
        $data['courses'] =  DB::table('courses')
            ->join('user_and_courses', 'courses.id', '=', 'user_and_courses.id_course')->where('user_and_courses.id_user', $id_user)->get();
        return view('learning.my-courses')->with($data);
    }

    public function viewCourse($id)
    {
        $id_user = session()->get('id');
        $data['title'] = Course::findOrFail($id)->first();
        
        $data['courseContent'] =  DB::table('courses')
            ->join('user_and_courses', 'courses.id', '=', 'user_and_courses.id_course')
            ->where(['user_and_courses.id_user' => $id_user, 'courses.id' => $id])
            ->get();
        return view('learning.learning')->with($data);
    }
}
