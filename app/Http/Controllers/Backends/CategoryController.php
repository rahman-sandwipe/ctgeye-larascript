<?php

namespace App\Http\Controllers\Backends;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(): View {
        $categories=Category::latest()->get();
        return view('backends.pages.category.category', compact('categories'));
    }

    // Insert a new data
    public function create(): View {
        return view('backends.pages.category.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name'      => ['required', 'string', 'unique:'.Category::class],
            'slug'      => ['required', 'string', 'unique:'.Category::class],
        ]);
        
        $data=array();
        $data=$request->all();
        $status=Category::create($data);
        if($status){
            $notification=array(
                'messege'=>'Successfully Added',
                'alert-type'=>'success'
            );
        }else{
            $notification=array(
                'messege'=>'Somthing went wrong!',
                'alert-type'=>'error'
            );
        }
        return Redirect()->route('category')->with($notification);
    }

    // Modify a exists data
    public function edit($id) : View
    {
        $category = Category::find($id);
        return view('backends.pages.category.edit',compact('category'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'slug' => ['required', 'string']
        ]);

        $data=array();
        $data['name']       = $request->name;
        $data['slug']       = $request->slug;
        $data['status']     = $request->status;
        $data['photo']      = $request->photo;
        $data['meta_tags']  = $request->meta_tags;
        $data['meta_desc']  = $request->meta_desc;
        $status=Category::find($id)->update($data);
        if($status){
            $notification=array(
                'messege'=>'Successfully Update',
                'alert-type'=>'success'
            );
        }else{
            $notification=array(
                'messege'=>'Somthing went wrong!',
                'alert-type'=>'error'
            );
        }
        return Redirect()->route('category')->with($notification);

    }


    public function status() {
        //
    }

    
    public function delete($id) {
        $data=Category::find($id);
        if (empty($data)) {
            abort(404);
        }
        $data->delete();
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
