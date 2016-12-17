<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Http\Requests;
use App\Directory;
use App\Location;
use App\Category;

class DirectoryController extends Controller
{
    public function __construct(Directory $directory){
        $this->directory = $directory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories =$this->directory->all();
        return view("directories.index",compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $locations = Location::lists('name','id');
        $categories = Category::lists('name','id');
         return view("directories.create",compact('locations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

if($request->hasFile('feature_images')){

           $ext = $request->file('feature_images')->getClientOriginalExtension();
            $fileName = date('Y-m-d-H-i-s').'.'.$ext;
          
            $request->file('feature_images')->move('uploads', $fileName);
            
            $image = new \App\Services\Image;
            $image->copy($fileName);
           
            $input['feature_images'] = $fileName;
        }
        

     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('logo')){
            $ext = $request->file('logo')->getClientOriginalExtension();
            $fileName = date('Y-m-d-H-i-s').'.'.$ext;
          
            $request->file('logo')->move('uploads', $fileName);
            $data['logo'] = $fileName;
        }
         $this->directory->create($data);
        return redirect('directories');
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
        $locations = Location::lists('name','id');
        $categories = Category::lists('name','id');
        $directory = $this->directory->find($id);
         return view("directories.edit",compact('locations','categories','directory'));
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
        $this->directory->find($id)->update($request->all());
         return redirect('directories');
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
