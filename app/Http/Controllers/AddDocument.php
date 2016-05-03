<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentsTable;
use App\StoriesTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;

class AddDocument extends Controller
{
	public function addDocumentGet($id) {
		return view("frontend.adddocument", ["id"=>$id]);
    }
    public function addDocumentPost(Request $request) {

        $documentRecord= new DocumentsTable;
        $documentRecord->title= $request->get('title');

        $storyRecord= StoriesTable::find($request->get('storyId'));

        $storyRecord->documents()->save($documentRecord);

        $documentName= $documentRecord->title.'.'.$request->file('document')->getClientOriginalExtension();

		$request->file('document')->move(base_path().'/public/files/'.$request->get('storyId').'/', $documentName);

        $documentRecord->document_url= '/files/'.$request->get('storyId').'/'.$documentName;
        $documentRecord->save();
	
		return redirect()->action('AddDocument@addDocumentGet', [$request->get('storyId')]);

    }
}