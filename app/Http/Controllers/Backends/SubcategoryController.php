<?php

namespace App\Http\Controllers\Backends;

use App\Models\Category;
use Illuminate\View\View;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    public function index(): View {
        $subcategory=Subcategory::latest()->get();
        return view('backends.pages.subcategory.subcategory', compact('subcategory'));
    }

    // Insert a new data
    public function create(): View {
        $category   = Category::all();
        return view('backends.pages.subcategory.create',compact('category'));
    }
    public function store(Request $request) {
        $request->validate([
            'name'      => ['required', 'string', 'unique:'.Category::class],
            'slug'      => ['required', 'string', 'unique:'.Category::class],
        ]);
        
        $data=array();
        $data=$request->all();
        $status=Subcategory::create($data);
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
        return Redirect()->route('subcategory')->with($notification);
    }

    // Modify a exists data
    public function edit($id) : View
    {
        $subcategory= Subcategory::find($id);
        $category   = Category::all();
        return view('backends.pages.subcategory.edit',compact('subcategory','category'));
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
        $data['cat_id']     = $request->cat_id;
        $data['status']     = $request->status;
        $data['photo']      = $request->photo;
        $data['meta_tags']  = $request->meta_tags;
        $data['meta_desc']  = $request->meta_desc;
        $status=Subcategory::find($id)->update($data);
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
        $data=Subcategory::find($id);
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
