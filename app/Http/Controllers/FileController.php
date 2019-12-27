<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fichiers;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $file=Fichiers::all();
       return $file;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       //$fileOrNm=$request->file->getClientOriginalName();
       

      ////  $fileNamePath='storage/'.$request->file->getClientOriginalName();
      //  $fileName = time().'.'.$request->file->getClientOriginalExtension();
        
      
     //   $request->file->storeAs('public',$request->$file);
        

     
        $file=new Fichiers();
        $file->name=$request->name;
        $uploaded_file=$request->file;
        $fileName=$uploaded_file->getClientOriginalName();
        $uploaded_file->move('upload',$fileName);
        $file->file_path='upload/'.$fileName;
       // $request->file->storeAs('public',$file);
        
        $file->save();
        return response()->json($file);
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
        //
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
        //
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
