<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Storage;
use Image;
use PDF;
use App\Filetype;
use App\Filecategory;
use App\Mediaresource;
use App\Stone;



class MediaresourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $stones = Stone::all();
        $selectedStone = Stone::first()->id;
        
        $filetypes = Filetype::all();
        $filecategories = Filecategory::all();

        return View('mediaresource.create',[
            'stones' => $stones,
            'selectedStone' => $selectedStone,            
            'filetypes' => $filetypes,
            'filecategories' => $filecategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('profile_image')) {
     
            foreach($request->file('profile_image') as $file){
     
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
     
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
                //get file extension
                $extension = $file->getClientOriginalExtension();
     
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;
     
                Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));
     
                //Resize image here
                $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
            }
     
            return redirect('mediaresource/create')->with('status', "Image uploaded successfully.");
        }
        echo "string";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }



    
    public function getPDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('/mediaresource/kt_indywidualna', $data);
  
        return $pdf->download('karta_techniczna_indywidualna.pdf');
    }





}
