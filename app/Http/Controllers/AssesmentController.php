<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Session;
use Validator;

class AssesmentController extends Controller
{
    public function index()
    {
        // $type = "All Blogs";
        // $record = Blog::all();
        // return view('admin.blogs.index', ['blogs' =>$record, 'type' => $type]);
        $record = Client::all();
        return view('index' ,  ['record' =>$record]);
    }

    public function saveClientRecord(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  'required|string',
            'email' => 'unique:clients|required|email',
            'designation' => 'required|string',
        ]);
        $record = new Client();
        $record->name = $request->name;
        $record->email = $request->email;
        $record->designation = $request->designation;
        $record->save();

        return redirect('/');
    }
}
