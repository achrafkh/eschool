<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
	public function dashboard()
	{
		return view('admin.index');
	}
    public function index()
    {
        $categories = Category::get();
    	return view('admin.categories.index',compact('categories'));
    }
    public function create(CategoryRequest $request)
    {
        $data = $request->only('description','title');
        
        $data['image'] = url(uploadFile($request->file('file'),'pictures'));
        
        Category::create($data);
    	return redirect('/admin/categories');
    }
    public function update(CategoryRequest $request)
    {
        Category::where('id',$request->id)->update($request->except(['_token','id']));

        return redirect('/admin/categories');
    }
    public function delete(Request $request){

        Category::destroy($request->id);
        return redirect('/admin/categories');
    }


}
