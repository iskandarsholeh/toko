<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_product = \App\Models\Products::all();
        $data_admin = \App\Models\Admins::pluck('nama', 'id');
        return view('admin.index',['data_product' => $data_product],['data_admin' => $data_admin]);
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
        //
        $input = $request->all();
  
        // if ($image = $request->file('foto')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['foto'] = "$profileImage";
        // }
    
        Products::create($input);

        return redirect('/admin')->with('sukses', 'Data berhasil diinput');
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
    
        $categories = Products::find($id);
        $data_admin = \App\Models\Admins::pluck('nama', 'id');
        // $flight->delete();
        // return redirect('/beritaubah')->with(compact('categories'));
        return view('admin.edit',['categories' => $categories],['data_admin' => $data_admin]);
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
        $categories = Products::find($id);
        // $categories->update($request->all());
        $input = $request->all();
  
        // if ($image = $request->file('foto')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['foto'] = "$profileImage";
        // }
    
        $categories->update($input);
        return redirect('/admin')->with('sukses', 'Data berhasil diinput');
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


    public function delete($id)
    {
        $categories = Products::find($id);
        $categories->delete();
        return redirect('/admin')->with('sukses', 'Data berhasil diinput');
    }
    
}
