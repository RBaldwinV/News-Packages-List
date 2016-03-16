<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class packagetableController extends Controller
{
    public function packages() {
        
        $packages= PackageTable::all();
        
        return view("frontend.packagetable",["packages"=>$packages]);
        
    }
    
    public function new_package (Request $request) {
        
        $package = new PackageTable;
        $package->correspondent_name = $request->correspondent_name;
        $package->package_title = $request->package_title;
        $package->ready_for_broadcast = $request->ready_for_broadcast;
        $package->video_files_id = $request->video_files_id;
        $package->audio_files_id = $request->audio_files_id;
        $package->image_files_id = $request->image_files_id;
        $package->admin_files_id = $request->admin_files_id;
        
        $package->save();
        
        $packages= PackageTable::all();
        
        return view("frontend.packagetable",["packages"=>$packages]);
    }
}
