<?php

namespace App\Http\Controllers;

use App\jpnew;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;


class jpnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jpnews = jpnew::all();
        return view('jpnews.index', compact('jpnews'));
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

        return view('jpnews.create', $relations);
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
        jpnew::create($request->all());
        return redirect()->route('jpnews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jpnew  $jpnew
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $jpnew = jpnew::findOrFail($id);

        return view('jpnews.show', compact('jpnew') + $relations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jpnew  $jpnew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $jpnew = jpnew::findOrFail($id);

        return view('jpnews.edit', compact('jpnew') + $relations);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jpnew  $jpnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jpnew = jpnew::findOrFail($id);
        $jpnew->update($request->all());

        return redirect()->route('jpnews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jpnew  $jpnew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jpnew = jpnew::findOrFail($id);
        $jpnew->delete();

        return redirect()->route('jpnews.index');
    }
}
