<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoriesTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Stories extends Controller
{
public function stories() {
        
        $stories= StoriesTable::all();
        
        return view("frontend.storiestable",["stories"=>$stories]);
        
}

public function updateStory($id) {
	
	$story= StoriesTableFinal::find($id);
	$story->ready = !$story->ready;

	$story->save();
	
$stories= StoriesTableFinal::all();
return view("frontend.storiestable",["stories"=>$stories]);
        
    }
}