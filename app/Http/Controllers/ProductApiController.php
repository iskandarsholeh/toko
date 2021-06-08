<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductApiController extends Controller
{
    //
    public function index()
    {
        $produk = Products::all();
        return response()->json(['data'=> $produk]);
    }

    public function show($id)
    {
        //
        $data = Products::find($id);
        return response()->json(['data'=> $data]);
    }
    public function store(Request $request)
    {
        //
        $data = Products::create($request->all());
        return response()->json(['data'=> $data]);
    }

    public function delete($id)
    {
        //
        $data = Products::find($id);
        $data->delete();
        return response()->json(['data'=> null]);
    }
    public function update(Request $request,$id)
    {
        //
        $data = Products::find($id);
        $data->update($request->all());
        return response()->json(['data'=> $data]);
    }
}
