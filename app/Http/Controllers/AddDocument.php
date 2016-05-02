<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentsTable;
use App\StoriesTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddDocument extends Controller
{
	public function addDocumentGet() {
		$stories= StoriesTable::all();

		return view("frontend.adddocument", ["stories"=>$stories]);
    }
    public function addDocumentPost(Request $request) {

        $documentRecord= new DocumentsTable;
        $documentRecord->title= $request->get('title');

        $storyRecord= StoriesTable::find($request->get('storyId'));

        $storyRecord->documents()->save($documentRecord);

        $documentName= 'document'.$documentRecord->id.'.'.$request->file('document')->getClientOriginalExtension();

		$request->file('document')->move(
            base_path().'/public/documents/', $documentName
        );

        $documentRecord->documentUrl= base_path().'/public/documents/'.$documentName;
        $documentRecord->save();
	
		return Redirect::route('addDocument')

    }
}