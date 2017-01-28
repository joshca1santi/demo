<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('home');
    }

    public function getAdministration()
    {   
        return view('administration');
    }

     public function getReport()
    {
        // $categories=$project->categories;
        $categories = Category::where('project_id',1)->get();
        return view('report')->with(compact('categories'));
    }
     public function postReport(Request $request)
    {
       
        //Incident::create();
        $incident= new Incident();
        $incident->category_id=$request->input('category_id')?: null;
        $incident->severity=$request->input('severity');
        $incident->title=$request->input('tittle');
        $incident->description=$request->input('Descripcion');
        $incident->client_id=auth()->user()->id;
        $incident->save();
       // dd ($request->all());
        return back();

    }
}
