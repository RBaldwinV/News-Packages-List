<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoriesTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;

class AddVideo extends Controller
{
	public function addVideoGet() {
		return view("frontend.addvideo");
    }
    public function addVideoPost(Request $request) {

        $videoRecord = new StoriesTable;
        $videoRecord->title= $request->get('title');
        $videoRecord->ready= false;
        $videoRecord->author= $request->get('author');
        $videoRecord->date= date("Y/m/d");
        $videoRecord->save();

        $videoName= $videoRecord->title.'.'.$request->file('video')->getClientOriginalExtension();

        $request->file('video')->move(base_path().'/public/files/'.$videoRecord->id.'/', $videoName);

        $videoRecord->video_url= '/files/'.$videoRecord->id.'/'.$videoName;
        $videoRecord->save();

        return redirect()->action('AddDocument@addDocumentGet', [$videoRecord->id]);

    }
}