<?php

namespace App\Http\Controllers\Backends;

use App\Models\User;
use App\Models\Video;
use App\Models\Category;
use Illuminate\View\View;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class VideosController extends Controller
{
    public function index(): View {
        $videos=Video::with('category','subcategory','user')->latest()->get();
        return view('backends.pages.videos.video', compact('videos'));
    }

    // Insert a new data
    public function create(): View {
        $category   = Category::where(['status'=>'active'])->latest()->get();
        $subcategory= Subcategory::where(['status'=>'active'])->latest()->get();
        $user       = User::where(['status'=>'active'])->latest()->get();
        return view('backends.pages.videos.create',compact('category','subcategory','user'));
    }
    public function store(Request $request) {
        $request->validate([
            'headline'  => ['required', 'string'],
            'thumbnail' => ['mimes:jpeg,jpg,png,gif','required']  //|max:10000 
        ]);
        $data=array();
        if($request->hasFile('thumbnail')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumbnail'));
            $img = $img->resize(1200, 630);
            $img->toJpeg(80)->save(base_path('public/uploads/videos/'.$name_gen));
            $save_url = 'uploads/videos/'.$name_gen;
        } // endif ==========
        $data=$request->all();
        $data['thumbnail']=$save_url;
        $status=Video::create($data);
        if($status){
            $notification=array(
                'messege'=>'Successfully Added',
                'alert-type'=>'success'
            );
            return Redirect()->route('videos')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing went wrong!',
                'alert-type'=>'error'
            );
            return back()->with($notification);
        }
    }
    
    
    // Modify a exists data
    public function edit($id) : View
    {
        $getData= Video::find($id);
        $category   = Category::where(['status'=>'active'])->latest()->get();
        $subcategory= Subcategory::where(['status'=>'active'])->latest()->get();
        $user       = User::where(['status'=>'active'])->latest()->get();
        return view('backends.pages.videos.edit',compact('getData','category','subcategory','user'));
    }
    public function update(Request $request,$id)
    {
        $getData=Video::find($id);
        if($getData){
            $request->validate([
                'headline'  => ['required', 'string']
            ]);
            if($request->hasFile('thumbnail')) {
                $manager = new ImageManager(new Driver());
                $name_gen = uniqid().'.'.$request->file('thumbnail')->getClientOriginalExtension();
                $img = $manager->read($request->file('thumbnail'));
                $img = $img->resize(1200, 630);
                $img->toJpeg(80)->save(base_path('public/uploads/videos/'.$name_gen));
                $save_url = 'uploads/videos/'.$name_gen;
                $data['thumbnail']=$save_url;
            } // endif ==========
            
            // ======= update data ======= //
            $data=$request->all();
            $status=$getData->fill($data)->save();
            if($status){
                $notification=array(
                    'messege'=>'Video feature successfully updated!',
                    'alert-type'=>'success'
                );
                return Redirect()->route('videos')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Something Was Wrong! Please try again!',
                    'alert-type'=>'error'
                );
                return back()->with($notification);
            }
        }else{
            $notification=array(
                'messege'=>'No found recorddata!',
                'alert-type'=>'error'
            );
            return Redirect()->route('videos')->with($notification);
        }
    }


    // Modify a exists data
    public function status(string $id)
    {
        $getStatus = Video::select('status')->where('id', $id)->first();
        if($getStatus->status=='active'){
            $status = 'inactive';
        }else{
            $status = 'active';
        }
        Video::where('id', $id)->update(['status'=>$status]);
        return back()->with('success','Status successfully update');
    }

    // Delete a exists data
    public function delete($id) {
        $data=Video::find($id);
        unlink($data->thumbnail);
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
