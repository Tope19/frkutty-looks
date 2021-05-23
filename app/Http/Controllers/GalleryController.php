<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\User;
use App\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(20);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:galleries',
            'description' => 'required',
            'image' => 'required'
        ]);

        try{

            $image_image = $request->file('image');
            $image_filename = time().'.'.$image_image->getClientOriginalExtension();
            $image_path = public_path('/Gallery_images');
            $image_image->move($image_path,$image_filename);

            $data['image'] = $image_filename;

            $form = Gallery::create($data);
        }
        catch(Exception $e){

        }
        return redirect()->back()->with('flash_message_success','Image added successfully!');
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
        $galleryDetails = Gallery::FindorFail($id);
        return view('admin.galleries.edit', compact('galleryDetails'));
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
        $galleries = Gallery::findorfail($id);
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            try{

                $image_image = $request->file('image');
                $image_filename = time().'.'.$image_image->getClientOriginalExtension();
                $image_path = public_path('/Gallery_images');
                $image_image->move($image_path,$image_filename);

                $data['image']  = $image_filename;
            }
            catch(Exception $e){

            }


            if (empty($data['description'])) {
                $data['description'] = '';
            }

            $galleries->update(['name'=>$data['name'], 'description'=>$data['description'],'image'=>$image_filename]);

            return redirect('/galleries')->with('flash_message_success','Gallery Image updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('galleries')->with('flash_message_success','Gallery Image deleted successfully!');
    }
}
