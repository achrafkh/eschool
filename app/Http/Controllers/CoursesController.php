<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\VideosRequest;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use Storage;
use App\Video;
use Session;

class CoursesController extends Controller
{
    public function dashboard()
	{
		return view('admin.index');
	}
    public function index()
    {
        $courses = Course::with('category','videos')->get();

        $categories = Category::get();
    	return view('admin.courses.index',compact('courses','categories'));
    }
    public function create(CourseRequest $request)
    {
        $data = $request->only('description','title','category_id','price');
        
        $data['image'] = url(uploadFile($request->file('file'),'pictures'));
       
        Course::create($data);
    	return redirect('/admin/courses');
    }
    public function update(CourseRequest $request)
    {

        Course::where('id',$request->id)->update($request->except(['_token','id']));

        return redirect('/admin/courses');
    }
    public function delete(Request $request){

        Course::destroy($request->id);
        return redirect('/admin/courses');
    }


    public function showUpload($id)
    {
        $videos = Video::where('course_id',$id)->get();

        return view('admin.courses.videos',compact('id','videos'));
    }

    public function doUpload($id,VideosRequest $request)
    {   
       $file = $request->file('file');
       $picture = $request->file('picture');

       $url = url(uploadFile($request->file('file'),'videos'));
       $pic = url(uploadFile($request->file('file'),'pictures'));


        Video::create([
            'course_id' => $id,
            'description' => $request->desc,
            'picture' => $pic,
            'url' => $url,
            'title' => $request->title,
        ]);

        Session::flash('msg','Added Video added successfully');
        return redirect('/admin/courses');
           
    }
}
