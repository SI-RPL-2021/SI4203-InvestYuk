<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        $users = User::all();
        $courses = Course::all();
        // review punya id user
        // dengan id user, cari user dengan id yg sama
        // munculin namanya

        return view('review.list-review')
        ->with(['reviews'=>$reviews, 'users'=>$users, 'courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['user'] = session()->get('id');
        $data['course'] = Course::findOrFail($id);
        return view('review.review')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isReviewed = Review::where(
            ['id_course'=>$request->id_course, 
            'id_user'=>$request->id_user
            ])->first();
        if(isset($isReviewed)){

            return back()->withErrors([
                'email' => 'You have reviewed this Learning Path.',
            ]);
        }

        $make_review = new Review;
        $make_review->id_course = $request->id_course;
        $make_review->id_user = $request->id_user;
        $make_review->rating = $request->rating;
        $make_review->review = $request->review;
        $make_review->save();
        return redirect()->route('listReview');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_course)
    {
        $reviews =  DB::table('reviews')->where('id_course', $id_course)->get();
        // $data['id_course'] = $id_course;
        $users = User::all();
        $course_name = Course::find($id_course)->course_name;
        
        return view('review.review-by-id')
        ->with(['reviews'=>$reviews, 'course_name'=>$course_name, 'users'=>$users]);
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
}
