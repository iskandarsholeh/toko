<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
class AdminApiController extends Controller
{
    //
    public function index()
    {
        //
        $data = Admins::all();
        return response()->json(['data'=> $data]);
    }

    public function show($id)
    {
        //
        $data = Admins::find($id);
        return response()->json(['data'=> $data]);
    }

    

}
