<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index(){
        $document = Document::all();
        return view(
            'document', 
            [
                'document' => $document,
            ]
        );
    }

    public function delete($id){
        $document = Document::find($id);
        $document->delete();
        return redirect('/document');
    }
}
