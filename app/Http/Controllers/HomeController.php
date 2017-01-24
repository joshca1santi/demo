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

     public function getReport()
    {
        // $categories=$project->categories;
        $categories = Category::where('project_id',1)->get();
        return view('report')->with(compact('categories'));
    }
     public function postReport(Request $request)
    {
        //reglas de validacion cuando el usuario registre un reporte
        $rules =[
        'category_id'=>'sometimes|exists:categories,id',/*|exists:categories,id (valida que el campo exista en la tabla*/
        'severity'=>'required|in:M,N,A',
        'tittle'=>'required|min:5',
        'Descripcion'=>'required|min:15'];
        // se separan las reglas de validacion de cada campo con un signo de |

        /* se envia a la funcion validate los campos realizados por el formulario post contra las reglas de validacion, la variable $mensaje se pasa con la uncion validate nos permite hacer mensajes personalizados para cada validador*/
        $messages=[
        'category_id.exists'=>'La Categoria seleccionada no existe en nuestra base de datos.',
        'tittle.required'=>'no ha ingresado un titulo para la incidencia.',
        'Descripcion.required'=>'la descripcion debe ser al menos 15 caracteres.'];
        $this->validate($request,$rules,$messages);

        //Incident::create();

        /*aqui se busca los valores del formulario para ser enviados a la base de datos atraves de la clase $incident y se valida que la categoria sea null sino se seleciona*/
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
