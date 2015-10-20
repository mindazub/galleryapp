<?php

namespace App\Http\Controllers;

use App\Gallery;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGalleryRequest;
use App\Http\Controllers\Controller;
use Validator;
// use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    
    //
    //
    //
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $galleries = Gallery::all();

        return view('gallery.index', compact('galleries'));
    }

    public function saveGallery(Request $request)
    {
        // $gallery = Gallery::create($request->all());
        // dd($request->gallery_name);

        // $gallery = Gallery::create($request->all());

        $v = Validator::make($request->all(), [
            'gallery_name' => 'required|min:3|max:255',
            ]);

        if($v->fails())
        {
            return redirect('gallery/list')
                    ->withErrors($v)
                    ->withInput();
        }
        
        $gallery = new Gallery;

        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = \Auth::user()->id;
        $gallery->published = 1;
        $gallery->save();

        // dd($gallery);

        return redirect()->back();
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        // dd();
        // 
        return view('gallery.show', compact('gallery'));
    }

    public function doImageUpload(Request $request)
    {
        // get post request
        $file = $request->file('file');
        // set my file name - a new filename
        // $filename = uniqid() . $file->getClientOriginalName(); 
        $filename = time() . $file->getClientOriginalName(); 
        // move file to corect location
        $file->move('galleryapp/images', $filename);
        // save the image to the database
        $gallery = Gallery::find($request->input('gallery_id'));
        $image = $gallery->images()->create([
            'gallery_id'=> $request->input('gallery_id'),
            'file_name' => $filename,
            'file_mime'=> $file->getClientMimeType(),
            'file_size' => $file->getClientSize(),
            'file_path' => 'galleryapp/images' . $filename,
            'created_by' =>  Auth::user()->id
            ]);
    }
}
