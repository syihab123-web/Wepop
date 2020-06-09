<?php

namespace App\Http\Controllers;

use App\kornew;
use Illuminate\Http\Request;

class kornewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kornews = kornew::all();
        return view('kornews.index', compact('kornews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            ];
    
            return view('kornews.create', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'image' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
 
      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'image_news';
 
                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
        
        kornew::create($request->all());

        return redirect()->route('kornews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kornew  $kornew
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $kornew = kornew::findOrFail($id);

        return view('kornews.show', compact('kornew') + $relations);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kornew  $kornew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $kornew = kornew::findOrFail($id);

        return view('kornews.edit', compact('kornew') + $relations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kornew  $kornew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kornew $kornew)
    {
        $kornew = kornew::findOrFail($id);
        $kornew->update($request->all());

        return redirect()->route('kornews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kornew  $kornew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kornew = kornew::findOrFail($id);
        $kornew->delete();

        return redirect()->route('kornews.index');
    }
}
