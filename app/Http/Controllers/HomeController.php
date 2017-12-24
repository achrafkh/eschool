<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['welcome']]);
    }

    public function myCourses($category = null)
    {
        if(is_null($category)){
            $courses = auth()->user()->courses()->get();
        } else {
            $courses = auth()->user()->courses()->where('category_id',$category )->get();
        }
        
        $categories = Category::get();
        return view('mycourses',compact('courses','categories'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories  = Category::with('courses')->get();
        return view('home',compact('categories'));
    }
    public function courses($id)
    {
        $category = Category::with('courses.videos')->find($id);
  
        $categories  = Category::with('courses.videos')->get();

        return view('courses',compact('category','categories'));
    }
    public function welcome()
    {
        $recent = Course::orderBy('created_at','desc')->with('category','videos')->take(5)->get();
        $all = Course::with('category','videos')->get();

        return view('welcome',compact('recent','all'));
    }

    public function course($id)
    {
        $related = Course::with('category','videos')->take(6)->inRandomOrder()->get();
        $course = Course::with('videos','category')->find($id);

        return view('single_course', compact('related','course'));
    }
}
