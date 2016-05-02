<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoriesTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddVideo extends Controller
{
	public function addVideoGet() {
		return view("frontend.addvideo");
    }
    public function addVideoPost(Request $request) {

        $videoRecord = new StoriesTable;
        $videoRecord->title= $request->get('title');
        $videoRecord->author= $request->get('author');
        $videoRecord->date= date("Y/m/d");
        $videoRecord->save();

        $videoName= 'video'.$videoRecord->id.'.'.$request->file('video')->getClientOriginalExtension();

        $request->file('video')->move(
            base_path().'/public/videos/', 
            $videoName
        );

        $videoRecord->videoUrl= base_path().'/public/videos/'.$videoName;
        $videoRecord->save();

        return Redirect::route('addVideo')

    }
}

