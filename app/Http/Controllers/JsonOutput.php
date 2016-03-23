<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PackageTable;

class JsonOutput extends Controller
{
    //
    public function index()
    {
    	$packages= PackageTable::all();

    	return response()->json($packages);
    }
    
}
